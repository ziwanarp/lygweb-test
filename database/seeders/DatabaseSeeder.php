<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\LygDestination;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\LygDestination::factory()->create([
            'DestinationCode' => 'HK',
            'DestinationName' => 'Hongkong'
        ]);

        \App\Models\LygDestination::factory()->create([
            'DestinationCode' => 'SG',
            'DestinationName' => 'Singapore'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'StyleSort' => '1',
            'SizeName' => 'XS'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'StyleSort' => '2',
            'SizeName' => 'S'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'StyleSort' => '3',
            'SizeName' => 'M'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'StyleSort' => '4',
            'SizeName' => 'L'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'StyleSort' => '5',
            'SizeName' => 'XL'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'StyleSort' => '6',
            'SizeName' => 'XXL'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'StyleSort' => '1',
            'SizeName' => '92'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'StyleSort' => '2',
            'SizeName' => '98'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'StyleSort' => '3',
            'SizeName' => '104'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'StyleSort' => '4',
            'SizeName' => '110'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'StyleSort' => '5',
            'SizeName' => '116'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'StyleSort' => '6',
            'SizeName' => '122'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'StyleSort' => '7',
            'SizeName' => '128'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'StyleSort' => '8',
            'SizeName' => '134'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'StyleSort' => '9',
            'SizeName' => '140'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'StyleSort' => '10',
            'SizeName' => '146'
        ]);

        \App\Models\LygStyleSize::factory()->create([
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'StyleSort' => '11',
            'SizeName' => '152'
        ]);

        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XS',
            'DestinationCode' => 'HK',
            'QtyOutput' => 15,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'S',
            'DestinationCode' => 'HK',
            'QtyOutput' => 25,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'L',
            'DestinationCode' => 'HK',
            'QtyOutput' => 30,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XL',
            'DestinationCode' => 'HK',
            'QtyOutput' => 17,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XXL',
            'DestinationCode' => 'HK',
            'QtyOutput' => 11,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XS',
            'DestinationCode' => 'SG',
            'QtyOutput' => 3,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'S',
            'DestinationCode' => 'SG',
            'QtyOutput' => 5,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XL',
            'DestinationCode' => 'SG',
            'QtyOutput' => 12,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XXL',
            'DestinationCode' => 'SG',
            'QtyOutput' => 1,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XS',
            'DestinationCode' => 'HK',
            'QtyOutput' => 12,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'S',
            'DestinationCode' => 'HK',
            'QtyOutput' => 12,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'L',
            'DestinationCode' => 'HK',
            'QtyOutput' => 9,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XL',
            'DestinationCode' => 'HK',
            'QtyOutput' => 25,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XXL',
            'DestinationCode' => 'HK',
            'QtyOutput' => 7,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XS',
            'DestinationCode' => 'SG',
            'QtyOutput' => 2,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XL',
            'DestinationCode' => 'SG',
            'QtyOutput' => 3,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '92',
            'DestinationCode' => 'HK',
            'QtyOutput' => 21,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '98',
            'DestinationCode' => 'HK',
            'QtyOutput' => 20,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '152',
            'DestinationCode' => 'HK',
            'QtyOutput' => 10,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '98',
            'DestinationCode' => 'SG',
            'QtyOutput' => 18,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '152',
            'DestinationCode' => 'SG',
            'QtyOutput' => 9,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '92',
            'DestinationCode' => 'HK',
            'QtyOutput' => 13,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '98',
            'DestinationCode' => 'HK',
            'QtyOutput' => 12,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-02',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '152',
            'DestinationCode' => 'HK',
            'QtyOutput' => 6,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'S',
            'DestinationCode' => 'HK',
            'QtyOutput' => 32,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'L',
            'DestinationCode' => 'HK',
            'QtyOutput' => 39,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XL',
            'DestinationCode' => 'HK',
            'QtyOutput' => 33,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XXL',
            'DestinationCode' => 'HK',
            'QtyOutput' => 11,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'S',
            'DestinationCode' => 'SG',
            'QtyOutput' => 9,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XL',
            'DestinationCode' => 'SG',
            'QtyOutput' => 30,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XXL',
            'DestinationCode' => 'SG',
            'QtyOutput' => 12,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'S',
            'DestinationCode' => 'HK',
            'QtyOutput' => 36,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'L',
            'DestinationCode' => 'HK',
            'QtyOutput' => 31,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XL',
            'DestinationCode' => 'HK',
            'QtyOutput' => 26,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XXL',
            'DestinationCode' => 'HK',
            'QtyOutput' => 13,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'L',
            'DestinationCode' => 'SG',
            'QtyOutput' => 6,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XL',
            'DestinationCode' => 'SG',
            'QtyOutput' => 11,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'BOSSE FANCY OH HOOD S.9',
            'SizeName' => 'XXL',
            'DestinationCode' => 'SG',
            'QtyOutput' => 13,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '92',
            'DestinationCode' => 'HK',
            'QtyOutput' => 11,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '98',
            'DestinationCode' => 'HK',
            'QtyOutput' => 12,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '104',
            'DestinationCode' => 'HK',
            'QtyOutput' => 21,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '110',
            'DestinationCode' => 'HK',
            'QtyOutput' => 14,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '116',
            'DestinationCode' => 'HK',
            'QtyOutput' => 17,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '122',
            'DestinationCode' => 'HK',
            'QtyOutput' => 23,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '128',
            'DestinationCode' => 'HK',
            'QtyOutput' => 25,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '134',
            'DestinationCode' => 'HK',
            'QtyOutput' => 27,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '140',
            'DestinationCode' => 'HK',
            'QtyOutput' => 29,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '146',
            'DestinationCode' => 'HK',
            'QtyOutput' => 14,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'M. Zaidan',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '152',
            'DestinationCode' => 'HK',
            'QtyOutput' => 12,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '92',
            'DestinationCode' => 'SG',
            'QtyOutput' => 21,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '98',
            'DestinationCode' => 'SG',
            'QtyOutput' => 11,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '104',
            'DestinationCode' => 'SG',
            'QtyOutput' => 19,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '110',
            'DestinationCode' => 'SG',
            'QtyOutput' => 7,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '116',
            'DestinationCode' => 'SG',
            'QtyOutput' => 6,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '122',
            'DestinationCode' => 'SG',
            'QtyOutput' => 5,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '134',
            'DestinationCode' => 'SG',
            'QtyOutput' => 12,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '140',
            'DestinationCode' => 'SG',
            'QtyOutput' => 18,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '146',
            'DestinationCode' => 'SG',
            'QtyOutput' => 19,
        ]);
        \App\Models\LygSewingOutput::factory()->create([
            'TrnDate' => '2024-01-03',
            'OperatorName' => 'Afizza Shabira',
            'StyleCode' => 'FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9',
            'SizeName' => '152',
            'DestinationCode' => 'SG',
            'QtyOutput' => 21,
        ]);


    }
}
