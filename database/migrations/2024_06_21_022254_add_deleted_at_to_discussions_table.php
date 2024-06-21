<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToDiscussionsTable extends Migration
{
    public function up()
    {
        Schema::table('discussions', function (Blueprint $table) {
            if (!Schema::hasColumn('discussions', 'deleted_at')) {
                $table->softDeletes();
            }
        });
    }

    public function down()
    {
        Schema::table('discussions', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
