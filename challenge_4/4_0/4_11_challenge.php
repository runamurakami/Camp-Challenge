<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>タスク4-0-1</title>
</head>
<body>
    <?php
    /*
     * 問1.この初期化は何を表しているか答えなさい
     * 答.2015年1月1日0時0分0秒からスタートするため。
     */
    $hour=0;
    $min=0;
    $sec=0;
    $month=1;
    $day=1;
    $year=2015;


    /*
     * 問2.このループにおける繰り返し条件を答えなさい
     * 答.継続条件が真である間、文を繰り返し実行。
     *   継続条件式がはじめから偽の場合は一度も実行されない。
     *
     * 問3.このループの目的を答えなさい
     * 答.$dayが365になるまで。
     */
    while($day<=365){

        /*
         * 問4.下行の処理の動作を答えなさい
         * 答.日付をタイムスタンプに変換。
         *
         * 問5.なぜ下行のような処理を行っているのかを答えなさい
         * 答.日時、時間をタイムスタンプに変換する。
         */
        $timestamp = mktime($hour, $min, $sec, $month, $day, $year);


        /*
         * 問6.下行の処理の動作を答えなさい
         * 答.今月をmで判断する。
         *
         * 問7.なぜ下行のような処理を行っているのかを答えなさい
         * 答.判断して月を判断する。
         */
        $now_month=date('m', $timestamp);

        /*
         * 問8.この条件分岐はどのような条件で行われているのか答えなさい
         * 答.今月と前月が違う時。
         *
         * 問9.条件分岐の目的を答えなさい
         * 答.前月を今月が異なえば、次の月を表示するため。
         */
        if($befor_month!=$now_month){

            /*
            * 問10.なぜ下行のような処理を行っているのかを答えなさい
            * 答.同じなら代入し何も表示しない。
            */
            $befor_month=$now_month;

            /*
            * 問11.下行の処理の動作を答えなさい
            * 答.今月を表示する。
            */
            echo '<br>'.$now_month.'月<br>';
        }

        /*
         * 問12.下行の処理の動作を答えなさい
         * 答.日付とタイムスタンプを表示。
         *
         * 問13.なぜ下行のような処理を行っているのか答えなさい
         * 答.日付と時間をわかるように。
         */
        echo date('Y年m月d日', $timestamp).'タイムスタンプ:'.$timestamp.'<br>';

        /*
         * 問14.なぜ下行のような処理を行っているのか答えなさい
         * 答.ループの文のため日にちを増やしていくため。
         */
        $day++;
    }

    /*
     * 問15.このプログラムは、何を目的とした処理なのかを要約して答えなさい
     * 答.365日の日付とタイムスタンプを表示する処理。
     *
     * 問16.このままでは本来この処理が望んでいる結果になっていない。何が問題で、どこをどう修正すべきか答えなさい
     * 答.$before_monthの定義がされていない。
     *
     */

    ?>
</body>
</html>
