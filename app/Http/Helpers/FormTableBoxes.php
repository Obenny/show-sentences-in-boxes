<?php


namespace App\Http\Helpers;


use App\Sentence;
use App\Table;

class FormTableBoxes
{
    public static function formTableBoxes($id, $rows, $columns)
    {
        $row_abbreviation = 'R';
        $column_abbreviation = 'C';
        for($i=1;$i<=$rows;$i++)
        {
            echo "<tr>";
            for ($j=1;$j<=$columns;$j++)
            {
                $row_column = $row_abbreviation.$i.$column_abbreviation.$j;
                $row_column_empty = '<span style="color: white"> kljsakjklsa klsajsja </span>';

//                $values = Sentence::all();
//                $values = Sentence::select('sentence_text')->where('sentence_row_column', $row_column)->get();
                $values = Sentence::select('sentence_text')->where('sentence_row_column', $row_column)
                    ->where('table_id', $id)
                    ->get();


//                dd($value);
//                $value = array($value);
                if(count($values) > 0)
                {
                    foreach ($values as $value)
                    {
                        echo '<td style="text-align:center">'.$value->sentence_text.'</td>';
                    }
                }
                else
                {
//                    echo "<td>$row_column</td>";
                    echo "<td>$row_column_empty</td>";
                }
            }
            echo "</tr>";
        }
    }
}
