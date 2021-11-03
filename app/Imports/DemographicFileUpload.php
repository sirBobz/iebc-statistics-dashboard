<?php

namespace App\Imports;

use App\Models\Demographic;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Facades\Log;

class DemographicFileUpload implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, ShouldQueue, WithValidation
{
    use Importable;
    /**
     * @param array $row
     *
     * @return Demographic
     */
    public function model(array $row): Demographic
    {

        return new Demographic([
            'county_code'   => $row['COUNTY CODE'],
            'county_name'   => $row['COUNTY NAME'],
            'constituency_code' => $row['CONSTITUENCY CODE'],
            'constituency_name'    => $row['CONSTITUENCY NAME'],
            'surname' => $row['SURNAME'],
            'other_names'   => $row['OTHER NAMES'],
            'party_code'  => $row['PARTY CODE'],
            'political_party_name' => $row['POLITICAL PARTY NAME'],
            'abbreviation'   => $row['ABBRV'],
            'votes_garnered'   => $row['VOTES GARNERED'],
            'winning_status' => $row['WINNER'],
        ]);
    }

    public function rules(): array
    {
        return [
            // '*.COUNTY CODE' => 'required|string',
            // '*.COUNTY NAME' => 'required|string',
            // '*.CONSTITUENCY CODE' => 'required|string',
            // '*.CONSTITUENCY NAME' => 'required|string',
            // '*.SURNAME' => 'required|string',
            // '*.OTHER NAMES' => 'required|string',
            // '*.PARTY CODE' => 'required|string',
            // '*.POLITICAL PARTY NAME' => 'required|string',
            // '*.ABBRV' => 'required|string',
            // '*.VOTES GARNERED' => 'required|string',
            // '*.WINNER' => 'required|string',
        ];
    }

    // This batch size will determine how many models will be inserted into the database in one time.
    // This will drastically reduce the import duration.
    // Check the best config for your machine

    public function batchSize(): int
    {
        return 5000;
    }

    //This will read the spreadsheet in chunks and keep the memory usage under control.
    // Check the best config for your machine
    public function chunkSize(): int
    {
        return 10000;
    }
}
