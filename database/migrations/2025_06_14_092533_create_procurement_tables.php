<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcurementTables  extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Table: divisions
        Schema::create('divisions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
        });

        // Table: users
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('divisions_id')->nullable();
            $table->foreign('divisions_id')->references('id')->on('divisions')->onDelete('cascade');
        });


        // Table: vendors
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('contact_email', 100)->nullable();
        });

        // Table: warehouse_items
        Schema::create('warehouse_items', function (Blueprint $table) {
            $table->id();
            $table->string('item_name', 100);
            $table->integer('stock_quantity')->default(0);
            $table->foreignId('vendor_id')->constrained('vendors')->onDelete('cascade');
        });

        // Table: requests
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->text('description')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });

        // Table: request_items
        Schema::create('request_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_id')->constrained('requests')->onDelete('cascade');
            $table->foreignId('item_id')->constrained('warehouse_items')->onDelete('cascade');
            $table->integer('quantity');
            $table->text('notes')->nullable();
        });

        // Table: approvals
        Schema::create('approvals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_id')->constrained('requests')->onDelete('cascade');
            $table->foreignId('approver_id')->constrained('users');
            $table->timestamp('approved_at')->useCurrent();
            $table->enum('status', ['approved', 'rejected']);
            $table->text('notes')->nullable();
        });

        // Table: request_status_logs
        Schema::create('request_status_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_id')->constrained('requests')->onDelete('cascade');
            $table->string('status', 50);
            $table->timestamp('updated_at')->useCurrent();
            $table->foreignId('updated_by')->constrained('users');
            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_status_logs');
        Schema::dropIfExists('approvals');
        Schema::dropIfExists('request_items');
        Schema::dropIfExists('requests');
        Schema::dropIfExists('warehouse_items');
        Schema::dropIfExists('vendors');
        Schema::dropIfExists('users');
        Schema::dropIfExists('divisions');
    }
}
