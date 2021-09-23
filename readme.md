①課題内容（課題名・どんな作品か）
船の部品を発注するアプリ

ページ順序/サイトマップ
AAA)qn1.phpがトップページ (style.css)
BBB)qn2.phpが発注内容確認ページ (qn2.css)
CCC)qn3.phpが発注結果ページ (qn3.css)

AAA)qn1.phpのL38からform/inputがスタート. inputの数字が発注個数

BBB)のqn2で①でsubmitされた値を受け取り、L18で連想配列に格納。それをjson.encodeでJSONにして、data2.txtに保存。
本当はL38以降、data_total.txtに保存されている過去の発注数を呼び出し、今回の発注数に加算したかった。連想配列に連想配列の値を加算する方法がわからず断念。
qn2.phpのL127でqn3.phpにページ遷移したいが、うまく飛ばない。buttonにonclick=href..でリンクを指定するものだめ.L126でPHPでリンクを定義して、onclick="location...何ちゃら..<?php echo '$URL'?>と指定しても不可 "。JQUERYで無理矢理onclickを記述してもだめ.なので、qn3.phpはURLに手書きでリンクを書いて、毎度ページを見に行っていた。。
ということで最終的にL133で無理矢理qn3.phpに移動するinputを作成した。

CCC)qn3.phpでdata2.txtに保存されているJSONを読み込み、JSON.decodeで連想配列にする。それを画面に表示する。本当は過去の発注数などグラフにしたかったが、②で記載の通り、過去の発注数に新規発注数を加算できず断念。

②工夫した点・こだわった点
発注する部品をJSONデータでtxtに保存し、そのデータをhtmlに表示すること。

③質問・疑問（あれば）


④その他（感想、シェアしたいことなんでも）
〜感想〜
連想配列arrayの中にさらに連想配列arrayを組む多次元配列も挑戦してみたが、今回はコードからは削除した。日付や部品のシリアルナンバーなど色々情報を詰め込めるので、とても面白い。ただし、連想配列を出力するのに相当苦労したことや、そもそも連想配列って何やねん。stdClassの配列って何やねんと、めちゃ時間かかって、何度もキレそうだった。配列が嫌いになりそうだ。


参考にしたURL
https://www.webdesignleaves.com/pr/php/php_basic_06.php
https://watsunblog.com/contactform-php/
https://www.php.net/manual/ja/function.json-encode
https://techacademy.jp/magazine/29471
