<?php

/* C:\xampp\htdocs\techmix/themes/techmix/pages/questions/question.htm */
class __TwigTemplate_5a45f66d4b035a0f9da119d2e4244a56d283534027df372368f3c03a22154e87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">
\t<div class=\"col-md-1\">
\t\t<!--Blank Column-->
\t</div>
\t<div class=\"col-md-8\">
\t\t<h3>This is a sample question that can be assked. This is how it will be displayed on this page. The user will have to click for details or to answer the questions
\t\t</h3>
\t</div>
\t<div class=\"col-md-3\">
\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("questions/ask_question");
        echo "\" class=\"btn btn-warning\">Ask Question</a>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\tSome adverts
\t\t</div>
\t</div>
\t<hr>
<!--questions details -->
\t<div class=\"row\">
\t\t<div class=\"col-md-1\">
\t\t\t<!--blank column-->
\t\t</div>
\t\t<div class=\"col-md-8\">
\t\t\tI have a number of records in a dataframe where the maturity date column is 31-12-9999 12:00:00 AM as the bonds never mature. This naturally raises the error:

Out of bounds nanosecond timestamp: 9999-12-31 00:00:00
I see the max date is:

pd.Timestamp.max
Timestamp('2262-04-11 23:47:16.854775807')
I just wanted to clarify what the best approach to clean all date columns in the datframe and fix my bug? My code modelled off the docs:
<pre>
df_Fix_Date = df_Date['maturity_date'].head(8)
display(df_Fix_Date)
display(df_Fix_Date.dtypes)

0    2020-08-15 00:00:00.000
1    2022-11-06 00:00:00.000
2    2019-03-15 00:00:00.000
3    2025-01-15 00:00:00.000
4    2035-05-29 00:00:00.000
5    2027-06-01 00:00:00.000
6    2021-04-01 00:00:00.000
7    2022-04-03 00:00:00.000
Name: maturity_date, dtype: object

def conv(x):
        return pd.Period(day = x%100, month = x//100 % 100, year = x // 10000, freq='D')

df_Fix_Date['maturity_date'] = pd.to_datetime(df_Fix_Date['maturity_date'])               # convert to datetype
df_Fix_Date['maturity_date'] = pd.PeriodIndex(df_Fix_Date['maturity_date'].apply(conv))   # fix error
display(df_Fix_Date)
</pre>
<!--Question tags-->
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<table class=\"table table-striped\">
\t\t\t<tr>
\t\t\t\t<td><span class=\"badge\">tag1</span></td>
\t\t\t\t<td><span class=\"badge\">tag2</span></td>
\t\t\t\t<td><span class=\"badge\">tag3</span></td>
\t\t\t\t<td><span class=\"badge\">tag4</span></td>

\t\t\t</tr>
\t\t</table>
\t\t<hr>
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t\t<td><a href=\"#\">Add Comments</a></td>
\t\t\t\t<td><a href=\"#\">Asked by: User name and avatar</a></td>
\t\t\t
\t\t</table>
\t</div>
\t</div>
\t<hr>
\t<!--Answers-->

\t<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<h3>Answers</h3>
\t\t<pre>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</pre>
\t</div>
\t</div>
\t<hr>
\t<div class=\"row\">
\t<div class=\"col-md-12\">
\t<div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Your Answer</h3>
        </div>
        <div class=\"panel-body\">
            <form class=\"form-inline\" data-request=\"onTest\" data-request-update=\"submitAnswer: '#result'\">
            \t<p>
            \t\t<textarea class=\"form-control\" cols=\"20\" rows=\"15\" name=\"answer\"></textarea>
            \t</p>
               
                
                <button type=\"submit\" class=\"btn btn btn-primary\" data-attach-loading>Post Your Answer</button>
            </form>
        </div>
       
    </div>
\t\t
\t</div>
\t</div>


\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\tUpdates and related questions
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/pages/questions/question.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
\t<div class=\"col-md-1\">
\t\t<!--Blank Column-->
\t</div>
\t<div class=\"col-md-8\">
\t\t<h3>This is a sample question that can be assked. This is how it will be displayed on this page. The user will have to click for details or to answer the questions
\t\t</h3>
\t</div>
\t<div class=\"col-md-3\">
\t\t<a href=\"{{ 'questions/ask_question'|page }}\" class=\"btn btn-warning\">Ask Question</a>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\tSome adverts
\t\t</div>
\t</div>
\t<hr>
<!--questions details -->
\t<div class=\"row\">
\t\t<div class=\"col-md-1\">
\t\t\t<!--blank column-->
\t\t</div>
\t\t<div class=\"col-md-8\">
\t\t\tI have a number of records in a dataframe where the maturity date column is 31-12-9999 12:00:00 AM as the bonds never mature. This naturally raises the error:

Out of bounds nanosecond timestamp: 9999-12-31 00:00:00
I see the max date is:

pd.Timestamp.max
Timestamp('2262-04-11 23:47:16.854775807')
I just wanted to clarify what the best approach to clean all date columns in the datframe and fix my bug? My code modelled off the docs:
<pre>
df_Fix_Date = df_Date['maturity_date'].head(8)
display(df_Fix_Date)
display(df_Fix_Date.dtypes)

0    2020-08-15 00:00:00.000
1    2022-11-06 00:00:00.000
2    2019-03-15 00:00:00.000
3    2025-01-15 00:00:00.000
4    2035-05-29 00:00:00.000
5    2027-06-01 00:00:00.000
6    2021-04-01 00:00:00.000
7    2022-04-03 00:00:00.000
Name: maturity_date, dtype: object

def conv(x):
        return pd.Period(day = x%100, month = x//100 % 100, year = x // 10000, freq='D')

df_Fix_Date['maturity_date'] = pd.to_datetime(df_Fix_Date['maturity_date'])               # convert to datetype
df_Fix_Date['maturity_date'] = pd.PeriodIndex(df_Fix_Date['maturity_date'].apply(conv))   # fix error
display(df_Fix_Date)
</pre>
<!--Question tags-->
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<table class=\"table table-striped\">
\t\t\t<tr>
\t\t\t\t<td><span class=\"badge\">tag1</span></td>
\t\t\t\t<td><span class=\"badge\">tag2</span></td>
\t\t\t\t<td><span class=\"badge\">tag3</span></td>
\t\t\t\t<td><span class=\"badge\">tag4</span></td>

\t\t\t</tr>
\t\t</table>
\t\t<hr>
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t\t<td><a href=\"#\">Add Comments</a></td>
\t\t\t\t<td><a href=\"#\">Asked by: User name and avatar</a></td>
\t\t\t
\t\t</table>
\t</div>
\t</div>
\t<hr>
\t<!--Answers-->

\t<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<h3>Answers</h3>
\t\t<pre>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</pre>
\t</div>
\t</div>
\t<hr>
\t<div class=\"row\">
\t<div class=\"col-md-12\">
\t<div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Your Answer</h3>
        </div>
        <div class=\"panel-body\">
            <form class=\"form-inline\" data-request=\"onTest\" data-request-update=\"submitAnswer: '#result'\">
            \t<p>
            \t\t<textarea class=\"form-control\" cols=\"20\" rows=\"15\" name=\"answer\"></textarea>
            \t</p>
               
                
                <button type=\"submit\" class=\"btn btn btn-primary\" data-attach-loading>Post Your Answer</button>
            </form>
        </div>
       
    </div>
\t\t
\t</div>
\t</div>


\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\tUpdates and related questions
\t\t</div>
\t</div>
</div>", "C:\\xampp\\htdocs\\techmix/themes/techmix/pages/questions/question.htm", "");
    }
}
