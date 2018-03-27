<?php 
class Cms5aba407f454a5674301540_bae28d92a760257d6c7a5cae49cd2fe8Class extends \Cms\Classes\PageCode
{
public function onPostQuestion()
{
    $question = input('question');
    $question_detail = input('question_detail');
    $this['title'] = $question;
    $this['detail'] = $question_detail;
}
}
