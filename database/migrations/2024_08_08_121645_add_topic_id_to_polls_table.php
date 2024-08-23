<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTopicIdToPollsTable extends Migration
{
    public function up()
    {
        Schema::table('polls', function (Blueprint $table) {
            // Proverite da li polje već postoji pre nego što ga dodate
            if (!Schema::hasColumn('polls', 'topic_id')) {
                $table->unsignedBigInteger('topic_id')->nullable(); // Dodajte polje kao nullable za početak
                $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        Schema::table('polls', function (Blueprint $table) {
            if (Schema::hasColumn('polls', 'topic_id')) {
                $table->dropForeign(['topic_id']);
                $table->dropColumn('topic_id');
            }
        });
    }
}
