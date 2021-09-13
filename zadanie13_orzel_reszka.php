<?php
$orzel = 0;
$reszka = 0;

    for($i=0; $i<100; $i++)
    {
        $los= rand(1,2);
        if($los == 1)
        {
            echo ("reszka <br>");
            $reszka++;
        }
        else
        {
            echo ("orzeł <br>");
            $orzel++;
        }

                

    }

    echo("<br>");

    echo("<br> Liczba orzełuf = $orzel"); //tak wiem wiem, ORŁÓW
    echo("<br> Liczba rzeszek = $reszka");

    if ($orzel>$reszka)
                {
                    echo ("<br> Podsumowując: więcej orzeła"); //tak wiem wiem, Orła
                }

                else if ($orzel=$reszka)
                {
                    echo ("<br> Podsumowując: remis");
                }

                else
                {
                    echo ("<br> Podsumowując: więcej reszki");
                }

?>