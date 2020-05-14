<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Business extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('business')) {
            Schema::create('business', function (Blueprint $table) {
                $table->increments('id')->comment('id');
                $table->string('code')->comment('mã công ty')->nullable();
                $table->string('name')->comment('tên công ty');
                $table->string('address')->comment('vị trí');
                $table->string('decription')->comment('mô tả');
                $table->string('mail')->comment('mail cong ty');
                $table->string('phone')->comment('dien thoai');
                $table->string('website')->comment('web doanh nghiệp');
                $table->string('facebook')->comment('facebook doanh nghiệp');
                $table->string('twitter')->comment('twitter doanh nghiệp');
                $table->mediumText('image')->comment('ảnh doanh nghiệp');

                
                // log time
                $table->timestamp('created_at')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ->comment('ngày tạo');

                $table->timestamp('updated_at')
                    ->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))
                    ->comment('ngày cập nhật');

                $table->timestamp('deleted_at')
                    ->nullable()
                    ->comment('ngày xóa tạm');
                    // Set ko trùng
                });
            
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
