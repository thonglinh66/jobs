<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AcountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('acounts')) {
            Schema::create('acounts', function (Blueprint $table) {
                $table->increments('id')->comment('id');
                $table->string('code')->comment('mã sinh viên');
                $table->string('password')->comment('mật khẩu');
                $table->integer('type')->comment('loại tài khoản');

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
