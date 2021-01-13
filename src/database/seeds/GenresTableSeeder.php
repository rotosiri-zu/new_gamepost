<?php

use Illuminate\Database\Seeder;

use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;

class GenresTableSeeder extends Seeder
{
    const CSV_FILENAME = '/../database/seeds/genre.csv'; 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('[Start] import data.');

        $config = new LexerConfig();
        // セパレーター指定、"\t"を指定すればtsvファイルとかも取り込めます
        $config->setDelimiter(",");
        // 1行目をスキップ
        // $config->setIgnoreHeaderLine(true);
        $lexer = new Lexer($config);
        $interpreter = new Interpreter();
        $interpreter->addObserver(function(array $row) {
            // 登録処理
            $genre = \App\Genre::create([
                    'genre_id' => $row[0], //
                    'genre_name' => $row[1] //
               ]);
        });

        $lexer->parse(app_path() . self::CSV_FILENAME, $interpreter);

        $this->command->info('[End] import data.');
    }
}
