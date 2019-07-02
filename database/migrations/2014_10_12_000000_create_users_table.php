<?php
declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * @var string
     */
    private $table = 'users';

    /**
     * @return void
     */
    public function up(): void
    {
        try {
            Schema::create($this->table, function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->string('name');
                $table->string('email');
                $table->timestamp('email_verified_at')->nullable();
                $table->boolean('existence')
                    ->nullable()
                    ->storedAs('CASE WHEN deleted_at IS NULL THEN 1 ELSE NULL END');
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
                $table->softDeletes();

                $table->unique([
                    'email',
                    'existence',
                ]);
            });
        } catch (\Exception $e) {
            report($e);
            $this->down();
            dd($e->getMessage());
        }
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists($this->table);
    }
}
