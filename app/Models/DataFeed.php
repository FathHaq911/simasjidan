<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class DataFeed extends Model
    {
        use HasFactory;

        protected $guarded = ['id'];

        protected $table = 'datafeeds';

        public function getDataFeed(int $dataType, string $field = 'label', ?int $limit = null)
        {
            $query = $this->where('data_type', $dataType)
                ->where(function($q) use ($field){
                    if ('label' == $field) {
                        $q->whereNotNull('label');
                    }
                })->pluck($field)
                ->toArray();

            if (null !== $limit) {
                return array_slice($query, 0, $limit);
            }

            return $query;
        }

        

        public function sumDataSet(int $dataType, ?int $dataset = null)
        {
            $query = $this->where('data_type', $dataType)
                ->where(function($q) use($dataset) {
                    if (null !== $dataset) {
                        $q->where('dataset_name', $dataset);
                    }
                })
                ->sum('data');

            return $query;
        }

    }
