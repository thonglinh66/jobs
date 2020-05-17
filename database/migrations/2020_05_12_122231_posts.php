<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('posts')) {
            Schema::create('posts', function (Blueprint $table) {
                $table->increments('id')->comment('id');
                $table->string('code')->comment('mã công ty');
                $table->integer('member')->comment('Số lượng tuyển dụng');
                $table->string('title')->comment('Tiêu đề');
                $table->string('pdecription')->comment('Mô tả');
               // $table->string('location')->comment('vị trí công ty');
                $table->integer('type')->comment('loai');
                $table->integer('min_salary')->comment('lương thấp nhất');
                $table->integer('max_salary')->comment('lương cao nhất');
                //$table->string('language')->comment('ngôn ngữ');
                $table->timestamp('deadline')->comment('Hạn chót')->nullable();
                
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
                    $table->unique(['code']);
                });
            DB::statement("ALTER TABLE `acounts` comment 'Thông tin bảng tài khoản'");
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
