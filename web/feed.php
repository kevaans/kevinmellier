


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

<div class="c-grid c-grid--m mt-7 mt--s-4">
    <div class="c-grid__row">
        <div class="u-col-6">
            <a href="" class="c-link c-type-title--5">Feeeeed</a>
            <div class="c-type-body--3">(A looooong list of inspirational websites)</div>
            <a class="c-link c-link--primary" href="" traget="_blank">Go to a random one ↗</a>
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
         <div class="u-col-6 border--left">
            <a href="" class="c-link c-type-title--2">Mooooodboards</a>
            <div class="c-type-body--3">(Some images I put in tables)</div>
            <div class="c-grid__row mt-5">
                <div class="u-col-6">
                    <!-- <img class="" src="web/img/profilpic4.jpg"/> -->
                    <div class="c-type-helper--1">intsagram • @kevin_mel</div>
                </div>
            </div>
        </div>
    </div>
</div>