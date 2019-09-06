---
title: FlexboxGrid
---

We use Flexbox Grid on the site and added some other functionality that we find useful.

Original flexbox Grid can be found here... http://flexboxgrid.com/


## Responsive

Responsive modifiers enable specifying different column sizes, offsets, alignment and distribution at xs, sm, md &amp; lg viewport widths.


<div>
<pre><code>&lt;div class="row">
    &lt;div class="col-xs-12
                col-sm-8
                col-md-6
                col-lg-4">
        &lt;div class="box">Responsive&lt;/div>
    &lt;/div>
&lt;/div></code></pre>
</div>


## Vertical Gutter padding

Flexbox grid has been adjusted to have vertical gutters too if needed

<div class="row row--vertical-gutters">
    <div class="col-xs-12 col-sm-3 col-md-2">
        <div class="box"></div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-8">
        <div class="box"></div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-2">
        <div class="box"></div>
    </div>
</div>
<div>
<pre><code>&lt;div class="row row--vertical-gutters">
    &lt;div class="col-xs-12 col-sm-8">
        &lt;div class="box">Responsive&lt;/div>
    &lt;/div>
&lt;/div></code></pre>
</div>


<h2>Fluid</h2>

<p>Percent based widths allow fluid resizing of columns and rows.</p>

<div class="row">
    <div class="col-xs-12">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-1">
        <div class="box-row"></div>
    </div>
    <div class="col-xs-11">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-2">
        <div class="box-row"></div>
    </div>
    <div class="col-xs-10">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-3">
        <div class="box-row"></div>
    </div>
    <div class="col-xs-9">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-4">
        <div class="box-row"></div>
    </div>
    <div class="col-xs-8">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-5">
        <div class="box-row"></div>
    </div>
    <div class="col-xs-7">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-6">
        <div class="box-row"></div>
    </div>
    <div class="col-xs-6">
        <div class="box-row"></div>
    </div>
</div>
<pre><code>.col-xs-6 {
  flex-basis: 50%;
}</code></pre>


 <h2>Simple Syntax</h2>

<p>All you need to remember is row, column, content.</p>

<pre><code>&lt;div class="row">
    &lt;div class="col-xs-12">
        &lt;div class="box">12&lt;/div>
    &lt;/div>
&lt;/div></code></pre>



<h2>Offsets</h2>

<p>Offset a column</p>
<div class="row">
    <div class="col-xs-offset-11 col-xs-1">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-offset-10 col-xs-2">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-offset-9 col-xs-3">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-offset-8 col-xs-4">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-offset-7 col-xs-5">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-offset-6 col-xs-6">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-offset-5 col-xs-7">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-offset-4 col-xs-8">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-offset-3 col-xs-9">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-offset-2 col-xs-10">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-offset-1 col-xs-11">
        <div class="box-row"></div>
    </div>
</div>

<pre><code>&lt;div class="row">
    &lt;div class="col-xs-offset-3 col-xs-9">
        &lt;div class="box">offset&lt;/div>
    &lt;/div>
&lt;/div></code></pre>


<h2>Auto Width</h2>

<p>Add any number of auto sizing columns to a row. Let the grid figure it out.</p>
<div class="row">
    <div class="col-xs">
        <div class="box-row"></div>
    </div>
    <div class="col-xs">
        <div class="box-row"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs">
        <div class="box-row"></div>
    </div>
    <div class="col-xs">
        <div class="box-row"></div>
    </div>
    <div class="col-xs">
        <div class="box-row"></div>
    </div>
</div>

<pre><code>&lt;div class="row">
    &lt;div class="col-xs">
        &lt;div class="box">auto&lt;/div>
    &lt;/div>
&lt;/div></code></pre>


<h2>Nested Grids</h2>

<p>Nest grids inside grids inside grids.</p>
<div class="row">
    <div class="col-xs-7">
        <div class="box box-container">
            <div class="row">
                <div class="col-xs-9">
                    <div class="box-first box-container">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="box-nested"></div>
                            </div>
                            <div class="col-xs-8">
                                <div class="box-nested"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="box-first box-container">
                        <div class="row">
                            <div class="col-xs">
                                <div class="box-nested"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-5">
        <div class="box box-container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box-first box-container">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="box-nested"></div>
                            </div>
                            <div class="col-xs-6">
                                <div class="box-nested"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<pre><code>&lt;div class="row">
    &lt;div class="col-xs">
        &lt;div class="box">
            &lt;div class="row">
                &lt;div class="col-xs">
                    &lt;div class="box">auto&lt;/div>
                &lt;/div>
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div></code></pre>


 <h2>Alignment</h2>

<p>Add classes to align elements to the start or end of a row as well as the top,
    bottom, or center of a column</p>
    <h3><code>.start-</code></h3>

<div class="row">
    <div class="col-xs-12">
        <div class="box box-container">
            <div class="row start-xs">
                <div class="col-xs-6">
                    <div class="box-nested"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<pre><code>&lt;div class="row start-xs">
    &lt;div class="col-xs-6">
        &lt;div class="box">
            start
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>


<h3><code>.center-</code></h3>

<div class="row">
    <div class="col-xs-12">
        <div class="box box-container">
            <div class="row center-xs">
                <div class="col-xs-6">
                    <div class="box-nested"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<pre><code>&lt;div class="row center-xs">
    &lt;div class="col-xs-6">
        &lt;div class="box">
            start
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

<h3><code>.end-</code></h3>

<div class="row">
    <div class="col-xs-12">
        <div class="box box-container">
            <div class="row end-xs">
                <div class="col-xs-6">
                    <div class="box-nested"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<pre><code>&lt;div class="row end-xs">
    &lt;div class="col-xs-6">
        &lt;div class="box">
            end
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

<p>Here is an example of using the modifiers in conjunction to acheive different alignment at different viewport sizes. </p>
<div class="row">
    <div class="col-xs-12">
        <div class="box box-container">
            <div class="row center-xs end-sm start-lg">
                <div class="col-xs-6">
                    <div class="box-nested"></div>
                </div>
            </div>
        </div>
    </div>
</div>Example
<pre><code>&lt;div class="row center-xs end-sm start-lg">
    &lt;div class="col-xs-6">
        &lt;div class="box">
            All together now
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

<h3><code>.top-</code></h3>

<div class="row top-xs">
    <div class="col-xs-6">
        <div class="box-large"></div>
    </div>
    <div class="col-xs-6">
        <div class="box"></div>
    </div>
</div>
<pre><code>&lt;div class="row top-xs">
    &lt;div class="col-xs-6">
        &lt;div class="box">
            top
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

<h3><code>.middle-</code></h3>

<div class="row middle-xs">
    <div class="col-xs-6">
        <div class="box-large"></div>
    </div>
    <div class="col-xs-6">
        <div class="box"></div>
    </div>
</div>
<pre><code>&lt;div class="row middle-xs">
    &lt;div class="col-xs-6">
        &lt;div class="box">
            center
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

<h3><code>.bottom-</code></h3>

<div class="row bottom-xs">
    <div class="col-xs-6">
        <div class="box-large"></div>
    </div>
    <div class="col-xs-6">
        <div class="box"></div>
    </div>
</div>
<pre><code>&lt;div class="row bottom-xs">
    &lt;div class="col-xs-6">
        &lt;div class="box">
            bottom
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

<h2>Distribution</h2>

<p>Add classes to distribute the contents of a row or column.</p>
<h3><code>.around-</code></h3>

<div class="row">
    <div class="col-xs-12">
        <div class="box box-container">
            <div class="row around-xs">
                <div class="col-xs-2">
                    <div class="box-nested"></div>
                </div>
                <div class="col-xs-2">
                    <div class="box-nested"></div>
                </div>
                <div class="col-xs-2">
                    <div class="box-nested"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<pre><code>&lt;div class="row around-xs">
    &lt;div class="col-xs-2">
        &lt;div class="box">
            around
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            around
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            around
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

<h3><code>.between-</code></h3>

<div class="row">
    <div class="col-xs-12">
        <div class="box box-container">
            <div class="row between-xs">
                <div class="col-xs-2">
                    <div class="box-nested"></div>
                </div>
                <div class="col-xs-2">
                    <div class="box-nested"></div>
                </div>
                <div class="col-xs-2">
                    <div class="box-nested"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<pre><code>&lt;div class="row between-xs">
    &lt;div class="col-xs-2">
        &lt;div class="box">
            between
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            between
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            between
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>


<h2>Reordering</h2>

<p>Add classes to reorder columns.</p>
<h3><code>.first-</code></h3>

<div class="row">
    <div class="col-xs-12">
        <div class="box box-container">
            <div class="row">
                <div class="col-xs-2">
                    <div class="box-first">1</div>
                </div>
                <div class="col-xs-2">
                    <div class="box-first">2</div>
                </div>
                <div class="col-xs-2">
                    <div class="box-first">3</div>
                </div>
                <div class="col-xs-2">
                    <div class="box-first">4</div>
                </div>
                <div class="col-xs-2">
                    <div class="box-first">5</div>
                </div>
                <div class="col-xs-2 first-xs">
                    <div class="box-nested">6</div>
                </div>
            </div>
        </div>
    </div>
</div>
<pre><code>&lt;div class="row">
    &lt;div class="col-xs-2">
        &lt;div class="box">
            1
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            2
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2 first-xs">
        &lt;div class="box">
            3
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>


<h3><code>.last-</code></h3>

<div class="row">
    <div class="col-xs-12">
        <div class="box box-container">
            <div class="row">
                <div class="col-xs-2 last-xs">
                    <div class="box-nested">1</div>
                </div>
                <div class="col-xs-2">
                    <div class="box-first">2</div>
                </div>
                <div class="col-xs-2">
                    <div class="box-first">3</div>
                </div>
                <div class="col-xs-2">
                    <div class="box-first">4</div>
                </div>
                <div class="col-xs-2">
                    <div class="box-first">5</div>
                </div>
                <div class="col-xs-2">
                    <div class="box-first">6</div>
                </div>
            </div>
        </div>
    </div>
</div>
<pre><code>&lt;div class="row">
    &lt;div class="col-xs-2 last-xs">
        &lt;div class="box">
            1
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            2
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            3
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>


<h2>Reversing</h2>

<h3><code>.reverse</code></h3>

<div class="row">
    <div class="col-xs-12">
        <div class="box box-container">
            <div class="row reverse">
                <div class="col-xs-2">
                    <div class="box-nested">1</div>
                </div>
                <div class="col-xs-2">
                    <div class="box-nested">2</div>
                </div>
                <div class="col-xs-2">
                    <div class="box-nested">3</div>
                </div>
                <div class="col-xs-2">
                    <div class="box-nested">4</div>
                </div>
                <div class="col-xs-2">
                    <div class="box-nested">5</div>
                </div>
                <div class="col-xs-2">
                    <div class="box-nested">6</div>
                </div>
            </div>
        </div>
    </div>
</div>

<pre><code>&lt;div class="row reverse">
    &lt;div class="col-xs-2">
        &lt;div class="box">
            1
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            2
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            3
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>








<!-- ****** -->

<link rel="stylesheet" href="{{ path '/css/flexboxgrid.css' }}">

<style>
    .box-row,
    .box-first,
    .box-nested,
    .box-large,
    .box {
      box-sizing: border-box;
      position: relative;
      box-sizing: border-box;
      min-height: 1.6rem;
      margin-bottom: 0;
      background: #007FFF;
      border: 1px solid #FFF;
      border-radius: 2px;
      overflow: hidden;
      text-align: center;
      color: white;
    }
    .box-row {
      margin-bottom: 16px;
    }
    .box-first {
      background: #0066CC;
      border-color: #007FFF;
    }
    .box-nested {
      background: #003366;
      border-color: #007FFF;
    }
    .box-large {
      height: 8rem;
    }
    .box-container {
      box-sizing: border-box;
      padding: 16px;
    }
    pre {
      overflow-x: auto;
      padding: 1.25em;
      border: 1px solid #e6e6e6;
      border-left-width: 5px;
      margin: 1.6em 0;
      font-size: 0.875em;
      background: #fcfcfc;
      white-space: pre;
      word-wrap: normal;
    }
    code {
      color: #007FFF;
    }

    @media only screen and (min-width: 48rem) {
        .box-row,
        .box-first,
        .box-nested,
        .box-large,
        .box {
          padding: 16px;
        }
    }
</style>
