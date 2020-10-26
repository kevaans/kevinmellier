<?php
    $feedContentLink = array (
        array(
            "url"     => "https://www.withjuno.com/",
            "text"    => "https://www.withjuno.com/",
        ),
        array(
            "url"     => "https://dixonbaxi.com/",
            "text"    => "https://dixonbaxi.com/",
        ),
        array(
            "url"     => "https://www.wearecollins.com/",
            "text"    => "https://www.wearecollins.com/",
        ),
        array(
            "url"     => "https://bengrandgenett.com/",
            "text"    => "https://bengrandgenett.com/",
        ),
        array(
            "url"     => "http://byfutura.com/en/",
            "text"    => "http://byfutura.com/en/",
        ),
    );
?>

<div class="c-grid c-grid--l mt-5 mt--s-4">
    <div class="c-grid__row">
        <div class="u-col--l-3 u-col--m-5 u-col--s-5 u-col-12 mb-5">
            <img class="" src="web/img/profilpic3.jpg"/>
        </div>
        <div class="u-col--l-push-2 u-col--m-push-1 u-col--s-push-1 u-col--s-6 u-col-12">

            <div class="c-type-title--5 mb-2">
                Bio
            </div>
            <div class="c-type-body--3">
                I’m a designer, creative director, and writer, with a BFA in graphic design from RISD. 
                I’m originally from Florida, did a 10-year-stint in the northeast, and these days 
                I’m on the West Coast. Before freelancing, I was a designer for two years at 
                Google Creative Lab in New York. As a freelance art director and designer, I’ve had 
                the pleasure to work with clients like Apple, Etsy, Google, and many others.
                </br>
                </br>
                I am currently the Creative Director of <a href="" class="c-link c-link--primary">Yurplan ↗</a>
                </br>
                </br>
                I live in San Francisco, don’t tweet about design, and try to love on people as much and best as I can.
            </div>

            <div class="c-type-title--5 mb-2 mt-4">
                Contact
            </div>
            <div class="c-type-body--3">
                email@kevinmellier.com • <a href=""class="c-link c-link--primary">email me ↗</a>
                </br>
                Lyon, France
            </div>

            <div class="c-type-title--5 mb-2 mt-4">
                Other
            </div>
            <div class="c-type-body--3">
                <a href="" class="c-link c-link--primary">Curriculum Vitae ↓</a>
                </br>
                <a href="" class="c-link c-link--primary">Twitter ↗</a>
            </div>

            <a href="" class="c-link c-type-title--5">Feeeeed</a>
            <div class="c-type-body--3">(A looooong list of inspirational websites)</div>
            <ul class="mt-5">
                <?php foreach ($feedContentLink as $key => $value): ?>
                    <li class="py-1">
                        <a class="c-link c-link--primary tiptext" traget="_blank" href="<?php echo $value["url"] ?>"><?php echo $value["text"] ?>  ↗
                        <!-- <iframe class="description" src="<?php echo $value["url"] ?>"> -->
                    </iframe></a>
                    </li>
                <?php endforeach ?>
            </ul>

        </div>
    </div>
    <!-- <div class="c-grid__row">
        <div class="u-col-6">
            <a href="" class="c-link c-type-title--5">Feeeeed</a>
            <div class="c-type-body--3">(A looooong list of inspirational websites)</div>
            <a class="c-link c-link--primary" href="" traget="_blank">Go to a random one ↗</a>
            <ul class="mt-5">
                <?php foreach ($feedContentLink as $key => $value): ?>
                    <li class="py-1">
                        <a class="c-link c-link--primary tiptext" traget="_blank" href="<?php echo $value["url"] ?>"><?php echo $value["text"] ?>  ↗
                    </iframe></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div> -->
</div>