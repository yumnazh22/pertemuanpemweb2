<?php 
// Bikin variabel Nilai
$grade = "A";
// Bikin Predikat
$predikat;

// Bikin percabangan Switch
switch ($grade) {
    case "A":
        $predikat = "Sangat Baik";
        break;
        case "B":
            $predikat = "Baik";
            break;
            case "c":
                $predikat = "Cukup";
                break;
                case "d":
                    $predikat = "Kurang";
                    break;
                    case "E":
                        $predikat = "Wassalam";
                        break;
                        default:
                        $predikat = "Nilai Tidak Ditemukan";
                        break;
}

echo "predikat : " . $predikat;



?>
