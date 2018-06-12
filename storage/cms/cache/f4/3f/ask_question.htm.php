<?php 
class Cms5af2f239d86bc562349627_34909f5d48dd197f55b5e6ada89d5524Class extends \Cms\Classes\PageCode
{
public function onPostQuestion()
{
    $question = input('question');
    $question_detail = input('question_detail');
    $this['title'] = $question;
    $this['detail'] = $question_detail;
}
}
