<?php

use yii\helpers\Html;
?>
<table style="width: 100%; font-family: Arial;">
    <tbody>
        <tr>
            <td style="width: 33%;">
                <?= Html::img(Yii::getAlias('@domainName/img/logos/' . 'sanidad_local.png'), [
                    'style' => 'height: 80px; width: auto'
                ]) ?>
            </td>
            <td style="text-align: center; width: 33%">
                <h1 style="font-weight: bold; font-size: 20px;"><?= Yii::t('app', 'Junta local de sanidad vegetal') ?></h1>
                <b><?= Yii::t('app', 'San Luis de la Loma, Gro.') ?></b>
            </td>
            <td style="text-align: right;">
                <?= Html::img(Yii::getAlias('@domainName/img/logos/' . 'logotipocesv.png'), [
                    'style' => 'height: 60px; width: auto'
                ]) ?>
            </td>
        </tr>
    </tbody>
</table>


<table style="border: 0.5px solid black;">
    <tr style="border: 0.5px solid black;">
        <td style="border: 0.5px solid black; margin-top: 40px;">
            <div style="margin-top: 30px !important;">
                <h1 style="font-size: 20px; text-align: center !important;" class="center">CERTIFICADO DE ORIGEN</h1>
            </div>
        </td>
        <td>
            <table>
                <tr>
                    <td style="border-bottom: 0.5px solid black; font-family: Arial; font-size: 12px;">
                        FOLIO NO.
                    </td>
                </tr>
                <tr>
                    <td style="border-bottom: 0.5px solid black; font-family: Arial; font-size: 12px;">
                        FECHA DE EXPEDICIÓN
                    </td>
                </tr>
                <tr>
                    <td style="font-family: Arial; font-size: 12px;">
                        FECHA DE VENCIMIENTO:
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr style="background-color: black; color: white; font-family: Arial;">
        <td class="center border-td" colspan="2" style="font-family: Arial; border-left: 0.5 solid black;">
            <h4 style="color: white; text-align: center;">
                Información sobre el producto o remitente
            </h4>
        </td>
    </tr>

    <tr style="border: 0.5px solid black; border-bottom: none;">
        <td colspan="2" style="font-family: Arial; font-size: 12px;">
            Nombre:
        </td>
    </tr>
    <tr style="border: 0.5px solid black; border-bottom: none;">
        <td colspan="2" style="font-family: Arial; font-size: 12px;">
            Domicilio:
        </td>
    </tr>

    <tr style="border: 0.5px solid black; border-bottom: none;">
        <td colspan="2">
            <table>
                <tr>
                    <td style="font-family: Arial; font-size: 12px;">Localidad: </td>
                    <td style="font-family: Arial; font-size: 12px;">Municipio:</td>
                    <td style="font-family: Arial; font-size: 12px;">Entidad: Guerrero</td>
                </tr>
            </table>
        </td>
    </tr>

    <tr style="border: 0.5px solid black; border-bottom: none;">
        <td colspan="2">
            <table>
                <tr>
                    <td style="font-family: Arial; font-size: 12px;">Domicilio Fiscal: </td>
                    <td style="font-family: Arial; font-size: 12px;">RFC: </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr style="background-color: black; color: white;">
        <td class="center" colspan="2" style="font-family: Arial; border-left: 0.5 solid black;">
            <h4 style="color: white; text-align: center; font-family: Arial;">
                Información sobre el producto que ampara este documento
            </h4>
        </td>
    </tr>

    <tr style="border: 0.5px solid black; border-bottom: none;">
        <td colspan="2">
            <table>
                <tr>
                    <td style="font-family: Arial; font-size: 12px;">Nombre: </td>
                    <td style="font-family: Arial; font-size: 12px;">Volumen y/o peso: </td>
                    <td style="font-family: Arial; font-size: 12px;">Unidad de medida: </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr style="border: 0.5px solid black; border-bottom: none;">
        <td colspan="2">
            <table>
                <tr>
                    <td style="font-family: Arial; font-size: 12px;">Origen: </td>
                    <td style="font-family: Arial; font-size: 12px;">Uso a que se destina: </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr style="border: 0.5px solid black; border-bottom: none;">
        <td colspan="2">
            <table>
                <tr>
                    <td style="font-family: Arial; font-size: 12px;">Tipo de empaque: </td>
                    <td style="font-family: Arial; font-size: 12px;">Importe total: $ </td>
                </tr>
            </table>
        </td>
    </tr>


    <tr style="background-color: black; color: white;">
        <td class="center" colspan="2" style="font-family: Arial; border-left: 0.5 solid black;">
            <h4 style="color: white; text-align: center;">
                Información sobre el destinatario
            </h4>
        </td>
    </tr>

    <tr style="border: 0.5px solid black; border-bottom: none;">
        <td colspan="2">
            <table>
                <tr>
                    <td style="font-family: Arial; font-size: 12px;">Nombre: </td>
                    <td style="font-family: Arial; font-size: 12px;">RFC: </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr style="border: 0.5px solid black; border-bottom: none;">
        <td colspan="2">
            <table>
                <tr>
                    <td style="font-family: Arial; font-size: 12px;">Domicilio: </td>
                    <td style="font-family: Arial; font-size: 12px;">Población: </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr style="border: 0.5px solid black; border-bottom: none;">
        <td colspan="2">
            <table>
                <tr>
                    <td style="font-family: Arial; font-size: 12px;">Municipio: </td>
                    <td style="font-family: Arial; font-size: 12px;">Entidad: </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr style="background-color: black; color: white;">
        <td class="center" colspan="2" style="font-family: Arial; border-left: 0.5 solid black;">
            <h4 style="color: white; text-align: center;">
                Información sobre el transporte empleado
            </h4>
        </td>
    </tr>

    <tr style="border: 0.5px solid black; border-bottom: none;">
        <td colspan="2">
            <table>
                <tr>
                    <td style="font-family: Arial; font-size: 12px;">Marca: </td>
                    <td style="font-family: Arial; font-size: 12px;">Modelo: </td>
                    <td style="font-family: Arial; font-size: 12px;">Tipo: </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr style="border: 0.5px solid black; border-bottom: none;">
        <td colspan="2">
            <table>
                <tr>
                    <td style="font-family: Arial; font-size: 12px;">Capacidad: </td>
                    <td style="font-family: Arial; font-size: 12px;">Placas o matrícula: </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr style="border: 0.5px solid black; border-bottom: none;">
        <td colspan="2">
            <table>
                <tr>
                    <td style="font-family: Arial; font-size: 12px;">Nombre del propietario del vehículo: </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr style="border: 0.5px solid black;">
        <td colspan="2">
            <table>
                <tr>
                    <td style="font-family: Arial; font-size: 12px;">Requisitos Fitosanitarios: <b style="font-weight: bold; color: black;">Campaña de la Mosca de la Fruta</b></td>
                </tr>
            </table>
        </td>
    </tr>

</table>

<table>
    <tr style="border: 0.5px solid black; font-family: Arial; font-size: 12px;">
        <td style="font-family: Arial; font-size: 12px; border: 0.5px solid black; margin: 2px;" class="center">
            Lugar de expedición
            <br>
            <br>
            <br>
            ____________________________
            <br>
            <br>
        </td>
        <td style="font-family: Arial; font-size: 12px; border: 0.5px solid black; margin: 2px;" class="center">
        <br>
        <br>
            ____________________________
            <br>
            <br>
            <br>
            Nombre y firma de quien expide
        </td>
        <td style="font-family: Arial; font-size: 12px; border: 0.5px solid black; margin: 2px;" class="center">
            <br>
            <br>
            <br>
            Sello de la Junta Local de Sanidad Vegetal
        </td>
    </tr>
</table>

<table>
    <tr>
        <td style="font-family: 'oleoscriptswashcaps'; font-size: 20px;" class="center">
        Los mejores Mangos de México se producen en <br>
        San Luis de la Loma, Mpio de Tecpan de Galeana, Gro.
        </td>
    </tr>
</table>