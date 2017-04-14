<!doctype html>
<!-- This file is a part Kočakote. © Mia Nordentoft 2016. See LICENSE.md for details -->
<html>
    <head>
        <title>Kočakote verb conjugator</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Pragma" content="no-cache">
        <?php
            $w = $_GET['q'] ?: '';
        ?>
    </head>
    <body>
        <h1>Nominal</h1>
        <h2>Infinitive</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}ti"?></td>
                    <td class="k"><?="tu${w}ti"?></td>

                    <td class="k"><?="ki${w}ti"?></td>
                    <td class="k"><?="ku${w}ti"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}ti"?></td>
                    <td class="k"><?="te${w}ti"?></td>

                    <td class="k"><?="ko${w}ti"?></td>
                    <td class="k"><?="ke${w}ti"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}ti"?></td>
                    <td class="k"><?="du${w}ti"?></td>

                    <td class="k"><?="ši${w}ti"?></td>
                    <td class="k"><?="šu${w}ti"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}ti"?></td>
                    <td class="k"><?="de${w}ti"?></td>

                    <td class="k"><?="šo${w}ti"?></td>
                    <td class="k"><?="še${w}ti"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}ti"?></td>
                    <td class="k"><?="då${w}ti"?></td>

                    <td class="k"><?="ša${w}ti"?></td>
                    <td class="k"><?="šå${w}ti"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}ti"?></td>
                    <td class="k"><?="tø${w}ti"?></td>

                    <td class="k"><?="kæ${w}ti"?></td>
                    <td class="k"><?="kø${w}ti"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}ti"?></td>
                    <td class="k"><?="su${w}ti"?></td>

                    <td class="k"><?="ni${w}ti"?></td>
                    <td class="k"><?="nu${w}ti"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}ti"?></td>
                    <td class="k"><?="se${w}ti"?></td>

                    <td class="k"><?="no${w}ti"?></td>
                    <td class="k"><?="ne${w}ti"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}ti"?></td>
                    <td class="k"><?="ču${w}ti"?></td>

                    <td class="k"><?="li${w}ti"?></td>
                    <td class="k"><?="lu${w}ti"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}ti"?></td>
                    <td class="k"><?="če${w}ti"?></td>

                    <td class="k"><?="lo${w}ti"?></td>
                    <td class="k"><?="le${w}ti"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}ti"?></td>
                    <td class="k"><?="čå${w}ti"?></td>

                    <td class="k"><?="la${w}ti"?></td>
                    <td class="k"><?="lå${w}ti"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}ti"?></td>
                    <td class="k"><?="sø${w}ti"?></td>

                    <td class="k"><?="næ${w}ti"?></td>
                    <td class="k"><?="nø${w}ti"?></td>
                </tr>
            </table>
        </div>

        <h2>Imperative</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}tu"?></td>
                    <td class="k"><?="tu${w}tu"?></td>

                    <td class="k"><?="ki${w}tu"?></td>
                    <td class="k"><?="ku${w}tu"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}tu"?></td>
                    <td class="k"><?="te${w}tu"?></td>

                    <td class="k"><?="ko${w}tu"?></td>
                    <td class="k"><?="ke${w}tu"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}tu"?></td>
                    <td class="k"><?="du${w}tu"?></td>

                    <td class="k"><?="ši${w}tu"?></td>
                    <td class="k"><?="šu${w}tu"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}tu"?></td>
                    <td class="k"><?="de${w}tu"?></td>

                    <td class="k"><?="šo${w}tu"?></td>
                    <td class="k"><?="še${w}tu"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}tu"?></td>
                    <td class="k"><?="då${w}tu"?></td>

                    <td class="k"><?="ša${w}tu"?></td>
                    <td class="k"><?="šå${w}tu"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}tu"?></td>
                    <td class="k"><?="tø${w}tu"?></td>

                    <td class="k"><?="kæ${w}tu"?></td>
                    <td class="k"><?="kø${w}tu"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}tu"?></td>
                    <td class="k"><?="su${w}tu"?></td>

                    <td class="k"><?="ni${w}tu"?></td>
                    <td class="k"><?="nu${w}tu"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}tu"?></td>
                    <td class="k"><?="se${w}tu"?></td>

                    <td class="k"><?="no${w}tu"?></td>
                    <td class="k"><?="ne${w}tu"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}tu"?></td>
                    <td class="k"><?="ču${w}tu"?></td>

                    <td class="k"><?="li${w}tu"?></td>
                    <td class="k"><?="lu${w}tu"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}tu"?></td>
                    <td class="k"><?="če${w}tu"?></td>

                    <td class="k"><?="lo${w}tu"?></td>
                    <td class="k"><?="le${w}tu"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}tu"?></td>
                    <td class="k"><?="čå${w}tu"?></td>

                    <td class="k"><?="la${w}tu"?></td>
                    <td class="k"><?="lå${w}tu"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}tu"?></td>
                    <td class="k"><?="sø${w}tu"?></td>

                    <td class="k"><?="næ${w}tu"?></td>
                    <td class="k"><?="nø${w}tu"?></td>
                </tr>
            </table>
        </div>

        <h1>Indicative</h1>
        <h2>Present</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}ka"?></td>
                    <td class="k"><?="tu${w}ka"?></td>

                    <td class="k"><?="ki${w}ka"?></td>
                    <td class="k"><?="ku${w}ka"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}ka"?></td>
                    <td class="k"><?="te${w}ka"?></td>

                    <td class="k"><?="ko${w}ka"?></td>
                    <td class="k"><?="ke${w}ka"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}ka"?></td>
                    <td class="k"><?="du${w}ka"?></td>

                    <td class="k"><?="ši${w}ka"?></td>
                    <td class="k"><?="šu${w}ka"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}ka"?></td>
                    <td class="k"><?="de${w}ka"?></td>

                    <td class="k"><?="šo${w}ka"?></td>
                    <td class="k"><?="še${w}ka"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}ka"?></td>
                    <td class="k"><?="då${w}ka"?></td>

                    <td class="k"><?="ša${w}ka"?></td>
                    <td class="k"><?="šå${w}ka"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}ka"?></td>
                    <td class="k"><?="tø${w}ka"?></td>

                    <td class="k"><?="kæ${w}ka"?></td>
                    <td class="k"><?="kø${w}ka"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}ka"?></td>
                    <td class="k"><?="su${w}ka"?></td>

                    <td class="k"><?="ni${w}ka"?></td>
                    <td class="k"><?="nu${w}ka"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}ka"?></td>
                    <td class="k"><?="se${w}ka"?></td>

                    <td class="k"><?="no${w}ka"?></td>
                    <td class="k"><?="ne${w}ka"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}ka"?></td>
                    <td class="k"><?="ču${w}ka"?></td>

                    <td class="k"><?="li${w}ka"?></td>
                    <td class="k"><?="lu${w}ka"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}ka"?></td>
                    <td class="k"><?="če${w}ka"?></td>

                    <td class="k"><?="lo${w}ka"?></td>
                    <td class="k"><?="le${w}ka"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}ka"?></td>
                    <td class="k"><?="čå${w}ka"?></td>

                    <td class="k"><?="la${w}ka"?></td>
                    <td class="k"><?="lå${w}ka"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}ka"?></td>
                    <td class="k"><?="sø${w}ka"?></td>

                    <td class="k"><?="næ${w}ka"?></td>
                    <td class="k"><?="nø${w}ka"?></td>
                </tr>
            </table>
        </div>

        <h2>Past</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}ki"?></td>
                    <td class="k"><?="tu${w}ki"?></td>

                    <td class="k"><?="ki${w}ki"?></td>
                    <td class="k"><?="ku${w}ki"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}ki"?></td>
                    <td class="k"><?="te${w}ki"?></td>

                    <td class="k"><?="ko${w}ki"?></td>
                    <td class="k"><?="ke${w}ki"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}ki"?></td>
                    <td class="k"><?="du${w}ki"?></td>

                    <td class="k"><?="ši${w}ki"?></td>
                    <td class="k"><?="šu${w}ki"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}ki"?></td>
                    <td class="k"><?="de${w}ki"?></td>

                    <td class="k"><?="šo${w}ki"?></td>
                    <td class="k"><?="še${w}ki"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}ki"?></td>
                    <td class="k"><?="då${w}ki"?></td>

                    <td class="k"><?="ša${w}ki"?></td>
                    <td class="k"><?="šå${w}ki"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}ki"?></td>
                    <td class="k"><?="tø${w}ki"?></td>

                    <td class="k"><?="kæ${w}ki"?></td>
                    <td class="k"><?="kø${w}ki"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}ki"?></td>
                    <td class="k"><?="su${w}ki"?></td>

                    <td class="k"><?="ni${w}ki"?></td>
                    <td class="k"><?="nu${w}ki"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}ki"?></td>
                    <td class="k"><?="se${w}ki"?></td>

                    <td class="k"><?="no${w}ki"?></td>
                    <td class="k"><?="ne${w}ki"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}ki"?></td>
                    <td class="k"><?="ču${w}ki"?></td>

                    <td class="k"><?="li${w}ki"?></td>
                    <td class="k"><?="lu${w}ki"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}ki"?></td>
                    <td class="k"><?="če${w}ki"?></td>

                    <td class="k"><?="lo${w}ki"?></td>
                    <td class="k"><?="le${w}ki"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}ki"?></td>
                    <td class="k"><?="čå${w}ki"?></td>

                    <td class="k"><?="la${w}ki"?></td>
                    <td class="k"><?="lå${w}ki"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}ki"?></td>
                    <td class="k"><?="sø${w}ki"?></td>

                    <td class="k"><?="næ${w}ki"?></td>
                    <td class="k"><?="nø${w}ki"?></td>
                </tr>
            </table>
        </div>

        <h2>Future</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}so"?></td>
                    <td class="k"><?="tu${w}so"?></td>

                    <td class="k"><?="ki${w}so"?></td>
                    <td class="k"><?="ku${w}so"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}so"?></td>
                    <td class="k"><?="te${w}so"?></td>

                    <td class="k"><?="ko${w}so"?></td>
                    <td class="k"><?="ke${w}so"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}so"?></td>
                    <td class="k"><?="du${w}so"?></td>

                    <td class="k"><?="ši${w}so"?></td>
                    <td class="k"><?="šu${w}so"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}so"?></td>
                    <td class="k"><?="de${w}so"?></td>

                    <td class="k"><?="šo${w}so"?></td>
                    <td class="k"><?="še${w}so"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}so"?></td>
                    <td class="k"><?="då${w}so"?></td>

                    <td class="k"><?="ša${w}so"?></td>
                    <td class="k"><?="šå${w}so"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}so"?></td>
                    <td class="k"><?="tø${w}so"?></td>

                    <td class="k"><?="kæ${w}so"?></td>
                    <td class="k"><?="kø${w}so"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}so"?></td>
                    <td class="k"><?="su${w}so"?></td>

                    <td class="k"><?="ni${w}so"?></td>
                    <td class="k"><?="nu${w}so"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}so"?></td>
                    <td class="k"><?="se${w}so"?></td>

                    <td class="k"><?="no${w}so"?></td>
                    <td class="k"><?="ne${w}so"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}so"?></td>
                    <td class="k"><?="ču${w}so"?></td>

                    <td class="k"><?="li${w}so"?></td>
                    <td class="k"><?="lu${w}so"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}so"?></td>
                    <td class="k"><?="če${w}so"?></td>

                    <td class="k"><?="lo${w}so"?></td>
                    <td class="k"><?="le${w}so"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}so"?></td>
                    <td class="k"><?="čå${w}so"?></td>

                    <td class="k"><?="la${w}so"?></td>
                    <td class="k"><?="lå${w}so"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}so"?></td>
                    <td class="k"><?="sø${w}so"?></td>

                    <td class="k"><?="næ${w}so"?></td>
                    <td class="k"><?="nø${w}so"?></td>
                </tr>
            </table>
        </div>

        <h2>Perfect</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}læ"?></td>
                    <td class="k"><?="tu${w}læ"?></td>

                    <td class="k"><?="ki${w}læ"?></td>
                    <td class="k"><?="ku${w}læ"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}læ"?></td>
                    <td class="k"><?="te${w}læ"?></td>

                    <td class="k"><?="ko${w}læ"?></td>
                    <td class="k"><?="ke${w}læ"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}læ"?></td>
                    <td class="k"><?="du${w}læ"?></td>

                    <td class="k"><?="ši${w}læ"?></td>
                    <td class="k"><?="šu${w}læ"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}læ"?></td>
                    <td class="k"><?="de${w}læ"?></td>

                    <td class="k"><?="šo${w}læ"?></td>
                    <td class="k"><?="še${w}læ"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}læ"?></td>
                    <td class="k"><?="då${w}læ"?></td>

                    <td class="k"><?="ša${w}læ"?></td>
                    <td class="k"><?="šå${w}læ"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}læ"?></td>
                    <td class="k"><?="tø${w}læ"?></td>

                    <td class="k"><?="kæ${w}læ"?></td>
                    <td class="k"><?="kø${w}læ"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}læ"?></td>
                    <td class="k"><?="su${w}læ"?></td>

                    <td class="k"><?="ni${w}læ"?></td>
                    <td class="k"><?="nu${w}læ"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}læ"?></td>
                    <td class="k"><?="se${w}læ"?></td>

                    <td class="k"><?="no${w}læ"?></td>
                    <td class="k"><?="ne${w}læ"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}læ"?></td>
                    <td class="k"><?="ču${w}læ"?></td>

                    <td class="k"><?="li${w}læ"?></td>
                    <td class="k"><?="lu${w}læ"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}læ"?></td>
                    <td class="k"><?="če${w}læ"?></td>

                    <td class="k"><?="lo${w}læ"?></td>
                    <td class="k"><?="le${w}læ"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}læ"?></td>
                    <td class="k"><?="čå${w}læ"?></td>

                    <td class="k"><?="la${w}læ"?></td>
                    <td class="k"><?="lå${w}læ"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}læ"?></td>
                    <td class="k"><?="sø${w}læ"?></td>

                    <td class="k"><?="næ${w}læ"?></td>
                    <td class="k"><?="nø${w}læ"?></td>
                </tr>
            </table>
        </div>

        <h2>Pluperfect</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}nu"?></td>
                    <td class="k"><?="tu${w}nu"?></td>

                    <td class="k"><?="ki${w}nu"?></td>
                    <td class="k"><?="ku${w}nu"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}nu"?></td>
                    <td class="k"><?="te${w}nu"?></td>

                    <td class="k"><?="ko${w}nu"?></td>
                    <td class="k"><?="ke${w}nu"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}nu"?></td>
                    <td class="k"><?="du${w}nu"?></td>

                    <td class="k"><?="ši${w}nu"?></td>
                    <td class="k"><?="šu${w}nu"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}nu"?></td>
                    <td class="k"><?="de${w}nu"?></td>

                    <td class="k"><?="šo${w}nu"?></td>
                    <td class="k"><?="še${w}nu"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}nu"?></td>
                    <td class="k"><?="då${w}nu"?></td>

                    <td class="k"><?="ša${w}nu"?></td>
                    <td class="k"><?="šå${w}nu"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}nu"?></td>
                    <td class="k"><?="tø${w}nu"?></td>

                    <td class="k"><?="kæ${w}nu"?></td>
                    <td class="k"><?="kø${w}nu"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}nu"?></td>
                    <td class="k"><?="su${w}nu"?></td>

                    <td class="k"><?="ni${w}nu"?></td>
                    <td class="k"><?="nu${w}nu"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}nu"?></td>
                    <td class="k"><?="se${w}nu"?></td>

                    <td class="k"><?="no${w}nu"?></td>
                    <td class="k"><?="ne${w}nu"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}nu"?></td>
                    <td class="k"><?="ču${w}nu"?></td>

                    <td class="k"><?="li${w}nu"?></td>
                    <td class="k"><?="lu${w}nu"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}nu"?></td>
                    <td class="k"><?="če${w}nu"?></td>

                    <td class="k"><?="lo${w}nu"?></td>
                    <td class="k"><?="le${w}nu"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}nu"?></td>
                    <td class="k"><?="čå${w}nu"?></td>

                    <td class="k"><?="la${w}nu"?></td>
                    <td class="k"><?="lå${w}nu"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}nu"?></td>
                    <td class="k"><?="sø${w}nu"?></td>

                    <td class="k"><?="næ${w}nu"?></td>
                    <td class="k"><?="nø${w}nu"?></td>
                </tr>
            </table>
        </div>

        <h2>Future perfect</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}di"?></td>
                    <td class="k"><?="tu${w}di"?></td>

                    <td class="k"><?="ki${w}di"?></td>
                    <td class="k"><?="ku${w}di"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}di"?></td>
                    <td class="k"><?="te${w}di"?></td>

                    <td class="k"><?="ko${w}di"?></td>
                    <td class="k"><?="ke${w}di"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}di"?></td>
                    <td class="k"><?="du${w}di"?></td>

                    <td class="k"><?="ši${w}di"?></td>
                    <td class="k"><?="šu${w}di"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}di"?></td>
                    <td class="k"><?="de${w}di"?></td>

                    <td class="k"><?="šo${w}di"?></td>
                    <td class="k"><?="še${w}di"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}di"?></td>
                    <td class="k"><?="då${w}di"?></td>

                    <td class="k"><?="ša${w}di"?></td>
                    <td class="k"><?="šå${w}di"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}di"?></td>
                    <td class="k"><?="tø${w}di"?></td>

                    <td class="k"><?="kæ${w}di"?></td>
                    <td class="k"><?="kø${w}di"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}di"?></td>
                    <td class="k"><?="su${w}di"?></td>

                    <td class="k"><?="ni${w}di"?></td>
                    <td class="k"><?="nu${w}di"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}di"?></td>
                    <td class="k"><?="se${w}di"?></td>

                    <td class="k"><?="no${w}di"?></td>
                    <td class="k"><?="ne${w}di"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}di"?></td>
                    <td class="k"><?="ču${w}di"?></td>

                    <td class="k"><?="li${w}di"?></td>
                    <td class="k"><?="lu${w}di"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}di"?></td>
                    <td class="k"><?="če${w}di"?></td>

                    <td class="k"><?="lo${w}di"?></td>
                    <td class="k"><?="le${w}di"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}di"?></td>
                    <td class="k"><?="čå${w}di"?></td>

                    <td class="k"><?="la${w}di"?></td>
                    <td class="k"><?="lå${w}di"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}di"?></td>
                    <td class="k"><?="sø${w}di"?></td>

                    <td class="k"><?="næ${w}di"?></td>
                    <td class="k"><?="nø${w}di"?></td>
                </tr>
            </table>
        </div>

        <h1>Progressive indicative</h1>
        <h2>Present</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}na"?></td>
                    <td class="k"><?="tu${w}na"?></td>

                    <td class="k"><?="ki${w}na"?></td>
                    <td class="k"><?="ku${w}na"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}na"?></td>
                    <td class="k"><?="te${w}na"?></td>

                    <td class="k"><?="ko${w}na"?></td>
                    <td class="k"><?="ke${w}na"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}na"?></td>
                    <td class="k"><?="du${w}na"?></td>

                    <td class="k"><?="ši${w}na"?></td>
                    <td class="k"><?="šu${w}na"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}na"?></td>
                    <td class="k"><?="de${w}na"?></td>

                    <td class="k"><?="šo${w}na"?></td>
                    <td class="k"><?="še${w}na"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}na"?></td>
                    <td class="k"><?="då${w}na"?></td>

                    <td class="k"><?="ša${w}na"?></td>
                    <td class="k"><?="šå${w}na"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}na"?></td>
                    <td class="k"><?="tø${w}na"?></td>

                    <td class="k"><?="kæ${w}na"?></td>
                    <td class="k"><?="kø${w}na"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}na"?></td>
                    <td class="k"><?="su${w}na"?></td>

                    <td class="k"><?="ni${w}na"?></td>
                    <td class="k"><?="nu${w}na"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}na"?></td>
                    <td class="k"><?="se${w}na"?></td>

                    <td class="k"><?="no${w}na"?></td>
                    <td class="k"><?="ne${w}na"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}na"?></td>
                    <td class="k"><?="ču${w}na"?></td>

                    <td class="k"><?="li${w}na"?></td>
                    <td class="k"><?="lu${w}na"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}na"?></td>
                    <td class="k"><?="če${w}na"?></td>

                    <td class="k"><?="lo${w}na"?></td>
                    <td class="k"><?="le${w}na"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}na"?></td>
                    <td class="k"><?="čå${w}na"?></td>

                    <td class="k"><?="la${w}na"?></td>
                    <td class="k"><?="lå${w}na"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}na"?></td>
                    <td class="k"><?="sø${w}na"?></td>

                    <td class="k"><?="næ${w}na"?></td>
                    <td class="k"><?="nø${w}na"?></td>
                </tr>
            </table>
        </div>

        <h2>Past</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}ni"?></td>
                    <td class="k"><?="tu${w}ni"?></td>

                    <td class="k"><?="ki${w}ni"?></td>
                    <td class="k"><?="ku${w}ni"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}ni"?></td>
                    <td class="k"><?="te${w}ni"?></td>

                    <td class="k"><?="ko${w}ni"?></td>
                    <td class="k"><?="ke${w}ni"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}ni"?></td>
                    <td class="k"><?="du${w}ni"?></td>

                    <td class="k"><?="ši${w}ni"?></td>
                    <td class="k"><?="šu${w}ni"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}ni"?></td>
                    <td class="k"><?="de${w}ni"?></td>

                    <td class="k"><?="šo${w}ni"?></td>
                    <td class="k"><?="še${w}ni"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}ni"?></td>
                    <td class="k"><?="då${w}ni"?></td>

                    <td class="k"><?="ša${w}ni"?></td>
                    <td class="k"><?="šå${w}ni"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}ni"?></td>
                    <td class="k"><?="tø${w}ni"?></td>

                    <td class="k"><?="kæ${w}ni"?></td>
                    <td class="k"><?="kø${w}ni"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}ni"?></td>
                    <td class="k"><?="su${w}ni"?></td>

                    <td class="k"><?="ni${w}ni"?></td>
                    <td class="k"><?="nu${w}ni"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}ni"?></td>
                    <td class="k"><?="se${w}ni"?></td>

                    <td class="k"><?="no${w}ni"?></td>
                    <td class="k"><?="ne${w}ni"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}ni"?></td>
                    <td class="k"><?="ču${w}ni"?></td>

                    <td class="k"><?="li${w}ni"?></td>
                    <td class="k"><?="lu${w}ni"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}ni"?></td>
                    <td class="k"><?="če${w}ni"?></td>

                    <td class="k"><?="lo${w}ni"?></td>
                    <td class="k"><?="le${w}ni"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}ni"?></td>
                    <td class="k"><?="čå${w}ni"?></td>

                    <td class="k"><?="la${w}ni"?></td>
                    <td class="k"><?="lå${w}ni"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}ni"?></td>
                    <td class="k"><?="sø${w}ni"?></td>

                    <td class="k"><?="næ${w}ni"?></td>
                    <td class="k"><?="nø${w}ni"?></td>
                </tr>
            </table>
        </div>

        <h2>Future</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}li"?></td>
                    <td class="k"><?="tu${w}li"?></td>

                    <td class="k"><?="ki${w}li"?></td>
                    <td class="k"><?="ku${w}li"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}li"?></td>
                    <td class="k"><?="te${w}li"?></td>

                    <td class="k"><?="ko${w}li"?></td>
                    <td class="k"><?="ke${w}li"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}li"?></td>
                    <td class="k"><?="du${w}li"?></td>

                    <td class="k"><?="ši${w}li"?></td>
                    <td class="k"><?="šu${w}li"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}li"?></td>
                    <td class="k"><?="de${w}li"?></td>

                    <td class="k"><?="šo${w}li"?></td>
                    <td class="k"><?="še${w}li"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}li"?></td>
                    <td class="k"><?="då${w}li"?></td>

                    <td class="k"><?="ša${w}li"?></td>
                    <td class="k"><?="šå${w}li"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}li"?></td>
                    <td class="k"><?="tø${w}li"?></td>

                    <td class="k"><?="kæ${w}li"?></td>
                    <td class="k"><?="kø${w}li"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}li"?></td>
                    <td class="k"><?="su${w}li"?></td>

                    <td class="k"><?="ni${w}li"?></td>
                    <td class="k"><?="nu${w}li"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}li"?></td>
                    <td class="k"><?="se${w}li"?></td>

                    <td class="k"><?="no${w}li"?></td>
                    <td class="k"><?="ne${w}li"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}li"?></td>
                    <td class="k"><?="ču${w}li"?></td>

                    <td class="k"><?="li${w}li"?></td>
                    <td class="k"><?="lu${w}li"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}li"?></td>
                    <td class="k"><?="če${w}li"?></td>

                    <td class="k"><?="lo${w}li"?></td>
                    <td class="k"><?="le${w}li"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}li"?></td>
                    <td class="k"><?="čå${w}li"?></td>

                    <td class="k"><?="la${w}li"?></td>
                    <td class="k"><?="lå${w}li"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}li"?></td>
                    <td class="k"><?="sø${w}li"?></td>

                    <td class="k"><?="næ${w}li"?></td>
                    <td class="k"><?="nø${w}li"?></td>
                </tr>
            </table>
        </div>

        <h2>Perfect</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}le"?></td>
                    <td class="k"><?="tu${w}le"?></td>

                    <td class="k"><?="ki${w}le"?></td>
                    <td class="k"><?="ku${w}le"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}le"?></td>
                    <td class="k"><?="te${w}le"?></td>

                    <td class="k"><?="ko${w}le"?></td>
                    <td class="k"><?="ke${w}le"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}le"?></td>
                    <td class="k"><?="du${w}le"?></td>

                    <td class="k"><?="ši${w}le"?></td>
                    <td class="k"><?="šu${w}le"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}le"?></td>
                    <td class="k"><?="de${w}le"?></td>

                    <td class="k"><?="šo${w}le"?></td>
                    <td class="k"><?="še${w}le"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}le"?></td>
                    <td class="k"><?="då${w}le"?></td>

                    <td class="k"><?="ša${w}le"?></td>
                    <td class="k"><?="šå${w}le"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}le"?></td>
                    <td class="k"><?="tø${w}le"?></td>

                    <td class="k"><?="kæ${w}le"?></td>
                    <td class="k"><?="kø${w}le"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}le"?></td>
                    <td class="k"><?="su${w}le"?></td>

                    <td class="k"><?="ni${w}le"?></td>
                    <td class="k"><?="nu${w}le"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}le"?></td>
                    <td class="k"><?="se${w}le"?></td>

                    <td class="k"><?="no${w}le"?></td>
                    <td class="k"><?="ne${w}le"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}le"?></td>
                    <td class="k"><?="ču${w}le"?></td>

                    <td class="k"><?="li${w}le"?></td>
                    <td class="k"><?="lu${w}le"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}le"?></td>
                    <td class="k"><?="če${w}le"?></td>

                    <td class="k"><?="lo${w}le"?></td>
                    <td class="k"><?="le${w}le"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}le"?></td>
                    <td class="k"><?="čå${w}le"?></td>

                    <td class="k"><?="la${w}le"?></td>
                    <td class="k"><?="lå${w}le"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}le"?></td>
                    <td class="k"><?="sø${w}le"?></td>

                    <td class="k"><?="næ${w}le"?></td>
                    <td class="k"><?="nø${w}le"?></td>
                </tr>
            </table>
        </div>

        <h2>Future perfect</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}lø"?></td>
                    <td class="k"><?="tu${w}lø"?></td>

                    <td class="k"><?="ki${w}lø"?></td>
                    <td class="k"><?="ku${w}lø"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}lø"?></td>
                    <td class="k"><?="te${w}lø"?></td>

                    <td class="k"><?="ko${w}lø"?></td>
                    <td class="k"><?="ke${w}lø"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}lø"?></td>
                    <td class="k"><?="du${w}lø"?></td>

                    <td class="k"><?="ši${w}lø"?></td>
                    <td class="k"><?="šu${w}lø"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}lø"?></td>
                    <td class="k"><?="de${w}lø"?></td>

                    <td class="k"><?="šo${w}lø"?></td>
                    <td class="k"><?="še${w}lø"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}lø"?></td>
                    <td class="k"><?="då${w}lø"?></td>

                    <td class="k"><?="ša${w}lø"?></td>
                    <td class="k"><?="šå${w}lø"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}lø"?></td>
                    <td class="k"><?="tø${w}lø"?></td>

                    <td class="k"><?="kæ${w}lø"?></td>
                    <td class="k"><?="kø${w}lø"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}lø"?></td>
                    <td class="k"><?="su${w}lø"?></td>

                    <td class="k"><?="ni${w}lø"?></td>
                    <td class="k"><?="nu${w}lø"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}lø"?></td>
                    <td class="k"><?="se${w}lø"?></td>

                    <td class="k"><?="no${w}lø"?></td>
                    <td class="k"><?="ne${w}lø"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}lø"?></td>
                    <td class="k"><?="ču${w}lø"?></td>

                    <td class="k"><?="li${w}lø"?></td>
                    <td class="k"><?="lu${w}lø"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}lø"?></td>
                    <td class="k"><?="če${w}lø"?></td>

                    <td class="k"><?="lo${w}lø"?></td>
                    <td class="k"><?="le${w}lø"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}lø"?></td>
                    <td class="k"><?="čå${w}lø"?></td>

                    <td class="k"><?="la${w}lø"?></td>
                    <td class="k"><?="lå${w}lø"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}lø"?></td>
                    <td class="k"><?="sø${w}lø"?></td>

                    <td class="k"><?="næ${w}lø"?></td>
                    <td class="k"><?="nø${w}lø"?></td>
                </tr>
            </table>
        </div>

        <h1>Conditional</h1>
        <h2>Present</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}tå"?></td>
                    <td class="k"><?="tu${w}tå"?></td>

                    <td class="k"><?="ki${w}tå"?></td>
                    <td class="k"><?="ku${w}tå"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}tå"?></td>
                    <td class="k"><?="te${w}tå"?></td>

                    <td class="k"><?="ko${w}tå"?></td>
                    <td class="k"><?="ke${w}tå"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}tå"?></td>
                    <td class="k"><?="du${w}tå"?></td>

                    <td class="k"><?="ši${w}tå"?></td>
                    <td class="k"><?="šu${w}tå"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}tå"?></td>
                    <td class="k"><?="de${w}tå"?></td>

                    <td class="k"><?="šo${w}tå"?></td>
                    <td class="k"><?="še${w}tå"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}tå"?></td>
                    <td class="k"><?="då${w}tå"?></td>

                    <td class="k"><?="ša${w}tå"?></td>
                    <td class="k"><?="šå${w}tå"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}tå"?></td>
                    <td class="k"><?="tø${w}tå"?></td>

                    <td class="k"><?="kæ${w}tå"?></td>
                    <td class="k"><?="kø${w}tå"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}tå"?></td>
                    <td class="k"><?="su${w}tå"?></td>

                    <td class="k"><?="ni${w}tå"?></td>
                    <td class="k"><?="nu${w}tå"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}tå"?></td>
                    <td class="k"><?="se${w}tå"?></td>

                    <td class="k"><?="no${w}tå"?></td>
                    <td class="k"><?="ne${w}tå"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}tå"?></td>
                    <td class="k"><?="ču${w}tå"?></td>

                    <td class="k"><?="li${w}tå"?></td>
                    <td class="k"><?="lu${w}tå"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}tå"?></td>
                    <td class="k"><?="če${w}tå"?></td>

                    <td class="k"><?="lo${w}tå"?></td>
                    <td class="k"><?="le${w}tå"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}tå"?></td>
                    <td class="k"><?="čå${w}tå"?></td>

                    <td class="k"><?="la${w}tå"?></td>
                    <td class="k"><?="lå${w}tå"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}tå"?></td>
                    <td class="k"><?="sø${w}tå"?></td>

                    <td class="k"><?="næ${w}tå"?></td>
                    <td class="k"><?="nø${w}tå"?></td>
                </tr>
            </table>
        </div>

        <h2>Perfect</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}kå"?></td>
                    <td class="k"><?="tu${w}kå"?></td>

                    <td class="k"><?="ki${w}kå"?></td>
                    <td class="k"><?="ku${w}kå"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}kå"?></td>
                    <td class="k"><?="te${w}kå"?></td>

                    <td class="k"><?="ko${w}kå"?></td>
                    <td class="k"><?="ke${w}kå"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}kå"?></td>
                    <td class="k"><?="du${w}kå"?></td>

                    <td class="k"><?="ši${w}kå"?></td>
                    <td class="k"><?="šu${w}kå"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}kå"?></td>
                    <td class="k"><?="de${w}kå"?></td>

                    <td class="k"><?="šo${w}kå"?></td>
                    <td class="k"><?="še${w}kå"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}kå"?></td>
                    <td class="k"><?="då${w}kå"?></td>

                    <td class="k"><?="ša${w}kå"?></td>
                    <td class="k"><?="šå${w}kå"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}kå"?></td>
                    <td class="k"><?="tø${w}kå"?></td>

                    <td class="k"><?="kæ${w}kå"?></td>
                    <td class="k"><?="kø${w}kå"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}kå"?></td>
                    <td class="k"><?="su${w}kå"?></td>

                    <td class="k"><?="ni${w}kå"?></td>
                    <td class="k"><?="nu${w}kå"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}kå"?></td>
                    <td class="k"><?="se${w}kå"?></td>

                    <td class="k"><?="no${w}kå"?></td>
                    <td class="k"><?="ne${w}kå"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}kå"?></td>
                    <td class="k"><?="ču${w}kå"?></td>

                    <td class="k"><?="li${w}kå"?></td>
                    <td class="k"><?="lu${w}kå"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}kå"?></td>
                    <td class="k"><?="če${w}kå"?></td>

                    <td class="k"><?="lo${w}kå"?></td>
                    <td class="k"><?="le${w}kå"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}kå"?></td>
                    <td class="k"><?="čå${w}kå"?></td>

                    <td class="k"><?="la${w}kå"?></td>
                    <td class="k"><?="lå${w}kå"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}kå"?></td>
                    <td class="k"><?="sø${w}kå"?></td>

                    <td class="k"><?="næ${w}kå"?></td>
                    <td class="k"><?="nø${w}kå"?></td>
                </tr>
            </table>
        </div>

        <h2>Pluperfect</h2>
        <div class="displayfigure">
            <table>
                <tr>
                    <th></th>

                    <th>Animate</th>
                    <th>Inanimate</th>

                    <th>Animate</th>
                    <th>Inanimate</th>
                </tr>
                <tr>
                    <th></th>

                    <th colspan="2">Singular</th>

                    <th colspan="2">Dual</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="ti${w}čå"?></td>
                    <td class="k"><?="tu${w}čå"?></td>

                    <td class="k"><?="ki${w}čå"?></td>
                    <td class="k"><?="ku${w}čå"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="to${w}čå"?></td>
                    <td class="k"><?="te${w}čå"?></td>

                    <td class="k"><?="ko${w}čå"?></td>
                    <td class="k"><?="ke${w}čå"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="di${w}čå"?></td>
                    <td class="k"><?="du${w}čå"?></td>

                    <td class="k"><?="ši${w}čå"?></td>
                    <td class="k"><?="šu${w}čå"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="do${w}čå"?></td>
                    <td class="k"><?="de${w}čå"?></td>

                    <td class="k"><?="šo${w}čå"?></td>
                    <td class="k"><?="še${w}čå"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="da${w}čå"?></td>
                    <td class="k"><?="då${w}čå"?></td>

                    <td class="k"><?="ša${w}čå"?></td>
                    <td class="k"><?="šå${w}čå"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="tæ${w}čå"?></td>
                    <td class="k"><?="tø${w}čå"?></td>

                    <td class="k"><?="kæ${w}čå"?></td>
                    <td class="k"><?="kø${w}čå"?></td>
                </tr>


                <tr>
                    <th></th>

                    <th colspan="2">Plural</th>

                    <th colspan="2">Unknown</th>
                </tr>
                <tr>
                    <td>1st person inclusive</td>

                    <td class="k"><?="si${w}čå"?></td>
                    <td class="k"><?="su${w}čå"?></td>

                    <td class="k"><?="ni${w}čå"?></td>
                    <td class="k"><?="nu${w}čå"?></td>
                </tr>
                <tr>
                    <td>1st person exclusive</td>

                    <td class="k"><?="so${w}čå"?></td>
                    <td class="k"><?="se${w}čå"?></td>

                    <td class="k"><?="no${w}čå"?></td>
                    <td class="k"><?="ne${w}čå"?></td>
                </tr>
                <tr>
                    <td>2nd person</td>

                    <td class="k"><?="či${w}čå"?></td>
                    <td class="k"><?="ču${w}čå"?></td>

                    <td class="k"><?="li${w}čå"?></td>
                    <td class="k"><?="lu${w}čå"?></td>
                </tr>
                <tr>
                    <td>3rd person</td>

                    <td class="k"><?="čo${w}čå"?></td>
                    <td class="k"><?="če${w}čå"?></td>

                    <td class="k"><?="lo${w}čå"?></td>
                    <td class="k"><?="le${w}čå"?></td>
                </tr>
                <tr>
                    <td>3rd person reflexive</td>

                    <td class="k"><?="ča${w}čå"?></td>
                    <td class="k"><?="čå${w}čå"?></td>

                    <td class="k"><?="la${w}čå"?></td>
                    <td class="k"><?="lå${w}čå"?></td>
                </tr>
                <tr>
                    <td>4th person</td>

                    <td class="k"><?="sæ${w}čå"?></td>
                    <td class="k"><?="sø${w}čå"?></td>

                    <td class="k"><?="næ${w}čå"?></td>
                    <td class="k"><?="nø${w}čå"?></td>
                </tr>
            </table>
        </div>
    </body>
</html>
