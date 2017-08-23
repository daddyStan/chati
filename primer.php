<script type="text/javascript">
// ВОЗМОЖНОСТЬ ИЗМЕНИТЬ ЦЕНЫ ТУТ ******************************************************************
//<![CDATA[

//МАТЕРИАЛ = [ ЦЕНА БЕЗ КОВЫЧЕК, 'НАЗВАНИЕ К КОВЫЧКАХ']
var material1=[450,'Anna']
var material2=[26900,'Jazberg verzoet']
var material3=[29600,'Steel Grey']
var material4=[32200,'Jet Black gepolijst']
var material5=[17000,'Star Galaxy poli']
var material6=[18500,'Indian Black gepolijst']
var material7=[20900,'Labrador blue gepolijst']
var material8=[35500,'Belgische Blauwesteen verzoet']
var material9=[16700,'Irok']
var material10=[17800,'Serius']
var material11=[19000,'Strato']
var material12=[19000,'Wit']
var material13=[20400,'Belgian Blue Grey']
var material14=[24900,'Belgian Blue Grey']

// СТОИМОСТЬ УСЛУГ***********************************************************************************************
//Вырез под мойку
//Вырез под мойку:Вариант А - мойка ложится сверху 
var moika1=1500;

//Вырез под мойку:Вариант Б - мойка подклеивается снизу 
var moika2=2000;

//Проточка для стока воды
var protochkaZ=1200;

//Вырез под плиту
//Вариант А - плита с кромкой ложится сверху
var virez1=2000;
//Вариант Б - плита ложится в один уровень с поверхностью
var virez2=1000;

//Кромка прямоугольная
var kromkap=0;

//Кромка Прямая
var kromkav1=780;

//Кромка Закругленная
var kromkav2=880;

//Кромка Утолщенная  
var kromkav3=980;

//Кромка Папугай
var kromkav4=1500;

//Бортик прямоугольный
var bortik=1000;

//Выезд
var viezdsp=2000;

//Доставка
var dostavka=3000;

//Подъем без лифта (за один этаж!)
var etazh=1500;

//Вырез под кран
var kranello=1500;

//замер
var zamer=5000;
//**************************************************************************************

//ТЕКСТ*******ТЕКСТ*******ТЕКСТ*******ТЕКСТ*******ТЕКСТ*******ТЕКСТ*******ТЕКСТ*******ТЕКСТ*******ТЕКСТ*******
//Главный заголовок (можно изменить внутри кавычек)
var title_main="Calculator keukenblad";

//Заголовок МАТЕРИАЛ
var title1="Materiaal:";

//Заголовок Выбор формы изделия
var title2="Выборо формы изделия:";

//Заголовок Остров
var title3="ОСтров:";

//Заголовок Выбор торцевой кромки
var title4="Выбор торцевой кромки:";

//Заголовок Выбор пристенного пространства
var title5="Выбор пристенного пространства:";

//Заголовок Бортик
var title6="Бортик:";

//Заголовок Дополнительные опции:
var title7="Дополнительные опции:";

//НАЗВАНИЯ МАТЕРИАЛОВ
var matrl1="Натуральный камень";
var matrl2="Керамика";
var matrl3="Композит";

var matrl4="Jazberg gepolijst";
var matrl5="Jazberg verzoet";
var matrl6="Steel Grey";
var matrl7="Jet Black gepolijst";
var matrl8="Star Galaxy poli";
var matrl9="Indian Black gepolijst";
var matrl10="Labrador blue gepolijst";
var matrl11="Belgische Blauwesteen verzoet";
var matrl12="Irok";
var matrl13="Serius";
var matrl14="Strato";
var matrl15="Wit";
var matrl16="Belgian Blue";
var matrl17="Belgian Blue Gre";

//ФОРМА ИЗДЕЛИЯ
var form1="Прямая";
var form2="Г-образная";
var form3="П-образная";

//ПАРАМЕТРЫ 
var dlinna=" Длинна";
var shirina=" Ширина";
var visotan=" Высота";

//ОТДЕЛЬНЫЕ ФРАЗЫ
var mvir="Вырез под мойку";
var pvir="Вырез под Плиту";
var pvir1="Вариант А - плита с кромкой ложится сверху";
var pvir2="Вариант Б - плита ложится в один уровень с поверхностью";
var mvir1="Вариант А - мойка ложится сверху";
var mvir2="Вариант Б - мойка подклеивается снизу";
var prots="Проточка для стока воды";
var kranio="Вырез под кран";
var samer="Замер";
var dastaffka="Доставка";
var poddy="Подъем ";
var how="Посчитать";
var kolvoetazhey="количество этажей: ";

//ФРАЗЫ ИТОГОВОЙ ТАБЛИЦЫ
var itog1="Расчет стоимости изделия";
var itog2="Выбран материал";
var itog3="Материал не выбран";
var itog4="Цена";
var itog5="Количество";
var itog6="Стоимость";
var itog7="Столешница (м.кв.)   ";
var itog8="Стеновая панель (м.кв.)";
var itog9="Остров (м.кв.)       ";
var itog10="Кромка (м.пог)      ";
var itog11="Бортик(кв.м.)       ";
var itog12="Проточка";
var itog13="Вырез под мойку     ";
var itog14="Вырез под кран      ";
var itog15="Вырез под Плиту     ";
var itog16="Замер";
var itog17="Доставка";
var itog18="Подъем";
var itog19="Стоимость";
    //***************************************************************************************************
//]]>
</script><div id="printy">
<h1>
    <script type="text/javascript">
//<![CDATA[
    document.write(title_main);
    //]]>
    </script>
</h1>

<div style="padding: 10px;background-color: #87c7c9;color:#2e2e2e;margin-bottom: 10px;cursor:pointer;" id="p1g" onclick=
"if(document.getElementById('pan1').style.display==='none'){document.getElementById('pan1').style.display='block';}else{document.getElementById('pan1').style.display='none';document.getElementById('p1-1').style.display='none';document.getElementById('p1-2').style.display='none';document.getElementById('p1-3').style.display='none';document.getElementById('p1-4').style.display='none';document.getElementById('p1-5').style.display='none';document.getElementById('p1-6').style.display='none';document.getElementById('p1-7').style.display='none';}">
<h3>
        <script type="text/javascript">
//<![CDATA[
        document.write(title1);
        //]]>
        </script>
    </h3>
</div>

<div id="pan1" style="display:none;">
    <p>
        <span style="margin: 0 10px;cursor:pointer;" onclick="f1()"><script type="text/javascript">
//<![CDATA[
        document.write(matrl1);
        //]]>
        </script></span> <span style="margin: 0 10px;cursor:pointer;" onclick="f2()"><script type="text/javascript">
//<![CDATA[
        document.write(matrl2);
        //]]>
        </script></span> <span style="margin: 0 10px;cursor:pointer;" onclick="f3()"><script type="text/javascript">
//<![CDATA[
        document.write(matrl3);
        //]]>
        </script></span>
    </p>
</div>

<div style="margin: 0 10px;display:none" id="p1-1">
    <div style="display:table;margin:20px auto; width: 900px;">
        <div style="display:table-cell;text-align:center;width: 20%;margin: 0 10px;cursor:pointer;" id="p1-1-1" onclick="f1p1()" class="material">
            <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/ia5e0cee1da4e97b6/version/1459281139/image.jpg" width='200' height="200" alt="" /><br />
            <script type="text/javascript">
//<![CDATA[
            document.write(matrl4);
            //]]>
            </script>
        </div>

        <div style="display:table-cell;text-align:center; width: 20%;margin: 0 10px;cursor:pointer;" id="p1-1-2" onclick="f1p2()" class="material">
            <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/ia5e0cee1da4e97b6/version/1459281139/image.jpg" width='200' height="200" alt="" /><br />
            <script type="text/javascript">
//<![CDATA[
            document.write(matrl5);
            //]]>
            </script>
        </div>

        <div style="display:table-cell;text-align:center; width: 20%;margin: 0 10px;cursor:pointer;" id="p1-1-3" onclick="f1p3()" class="material">
            <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/i7e4944a079e95b04/version/1459281159/image.jpg" width='200' height="200" alt="" /><br />
            <script type="text/javascript">
//<![CDATA[
            document.write(matrl6);
            //]]>
            </script>
        </div>

        <div style="display:table-cell;text-align:center; width: 20%;margin: 0 10px;cursor:pointer;" id="p1-1-4" onclick="f1p4()" class="material">
            <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/i596740a5cf47b718/version/1459281172/image.jpg" width='200' height="200" alt="" /><br />
            <script type="text/javascript">
//<![CDATA[
            document.write(matrl7);
            //]]>
            </script>
        </div>
    </div>
    <br />

    <div style="display:table;margin:20px auto; width: 900px;">
        <div style="display:table-cell;text-align:center; width: 20%;margin: 0 10px;cursor:pointer;" id="p1-1-5" onclick="f1p5()" class="material">
            <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/i26b3387f15513c45/version/1459281186/image.jpg" width="200" height="200" alt="" /><br />
            <script type="text/javascript">
//<![CDATA[
            document.write(matrl8);
            //]]>
            </script>
        </div>

        <div style="display:table-cell;text-align:center; width: 20%;margin: 0 10px;cursor:pointer;" id="p1-1-6" onclick="f1p6()" class="material">
            <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/ifbe379ea3c81b60f/version/1459281198/image.jpg" width="200" height="200" alt="" /><br />
            <script type="text/javascript">
//<![CDATA[
            document.write(matrl9);
            //]]>
            </script>
        </div>

        <div style="display:table-cell;text-align:center; width:20%;margin: 0 10px;cursor:pointer;" id="p1-1-7" onclick="f1p7()" class="material">
            <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/if68869fa00851bb0/version/1459281209/image.jpg-" width="200" height="200" alt="" /><br />
            <script type="text/javascript">
//<![CDATA[
            document.write(matrl10);
            //]]>
            </script>
        </div>

        <div style="display:table-cell;text-align:center; width: 20%;margin: 0 10px;cursor:pointer;" id="p1-1-8" onclick="f1p8()" class="material">
            <img src="https://image.jimcdn.com/app/cms/image/transf/dimension=910x10000:format=jpg/path/sd1623c3d59aeb736/image/ie2d47e910a15815e/version/1459281223/image.jpg" width="200" height=
            "200" alt="" /><br />
            <script type="text/javascript">
//<![CDATA[
            document.write(matrl11);
            //]]>
            </script>
        </div>
    </div>
</div>

<div style="margin: 0 10px;display:none" id="p1-2">
    <div style="display:table;margin:20px auto;">
        <div style="display:table-cell;text-align:center; width: 30%;margin: 0 10px;cursor:pointer;" id="p1-1-9" onclick="f2p1()" class="material">
            <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/i6d724b2e7e3a8b34/version/1459281237/image.jpg" width="200" height="200" alt="" /><br />
            <script type="text/javascript">
//<![CDATA[
            document.write(matrl12);
            //]]>
            </script>
        </div>

        <div style="display:table-cell;text-align:center; width: 30%;margin: 0 10px;cursor:pointer;" id="p1-1-10" onclick="f2p2()" class="material">
            <img src="https://image.jimcdn.com/app/cms/image/transf/dimension=398x10000:format=jpg/path/sd1623c3d59aeb736/image/i84a96461eab78f6e/version/1459342121/image.jpg" width="200" height=
            "200" alt="" /><br />
            <script type="text/javascript">
//<![CDATA[
            document.write(matrl13);
            //]]>
            </script>
        </div>

        <div style="display:table-cell;text-align:center; width: 30%;margin: 0 10px;cursor:pointer;" id="p1-1-11" onclick="f2p3()" class="material">
            <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/i8e129ecf93662246/version/1459342303/image.jpg" width="200" height="200" alt="" /><br />
            <script type="text/javascript">
//<![CDATA[
            document.write(matrl14);
            //]]>
            </script>
        </div>
    </div>
</div>

<div style="margin: 0 10px;display:none" id="p1-3">
    <table cellpadding="10" style="margin: 0 auto;">
        <tr>
            <td>
                <div style="display:table-cell;text-align:center; width: 30%;margin: 0 10px;cursor:pointer;" id="p1-1-12" onclick="f3p1()" class="material">
                    <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/i0ee7b9fd3b2d3296/version/1459281280/image.jpg" height="200" width="200" alt="" /><br />
                    <script type="text/javascript">
//<![CDATA[
                    document.write(matrl15);
                    //]]>
                    </script>
                </div>
            </td>
            <td>
                <div style="display:table-cell;text-align:center; width: 30%;margin: 0 10px;cursor:pointer;" id="p1-1-13" onclick="f3p2()" class="material">
                    <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/ib31bb2af18a890b3/version/1459281295/image.jpg" height="200" width="200" alt="" /><br />
                    <script type="text/javascript">
//<![CDATA[
                    document.write(matrl16);
                    //]]>
                    </script>
                </div>
            </td>
            <td>
                <div style="display:table-cell;text-align:center; width: 30%;margin: 0 10px;cursor:pointer;" id="p1-1-14" onclick="f3p3()" class="material">
                    <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/ib13e3ced21fd13a1/version/1459342431/image.jpg" height="200" width="200" alt="" /><br />
                    <script type="text/javascript">
//<![CDATA[
                    document.write(matrl17);
                    //]]>
                    </script>
                </div>
            </td>
        </tr>
    </table>
</div>

<div style="padding: 10px;cursor:pointer;background-color: #87c7c9;color:#2e2e2e;margin-bottom: 10px;margin-top:10px" onclick=
"if(document.getElementById('pan2').style.display==='none'){document.getElementById('pan2').style.display='block'}else{document.getElementById('pan2').style.display='none';document.getElementById('p2-1').style.display='none';document.getElementById('p2-2').style.display='none';document.getElementById('p2-3').style.display='none';document.getElementById('p7-122').style.display='none';}">
<h3>
        <script type="text/javascript">
//<![CDATA[
        document.write(title2);
        //]]>
        </script>
    </h3>
</div>

<p id="pan2" style="display:none">
    <span style="margin: 0 10px;cursor:pointer;" onclick="f8();clear1();"><script type="text/javascript">
//<![CDATA[
    document.write(form1);
    //]]>
    </script></span> <span style="margin: 0 10px;cursor:pointer;" onclick="f9();clear1();"><script type="text/javascript">
//<![CDATA[
    document.write(form2);
    //]]>
    </script></span> <span style="margin: 0 10px;cursor:pointer;" onclick="f10();clear1();"><script type="text/javascript">
//<![CDATA[
    document.write(form3);
    //]]>
    </script></span>
</p>
<!-- ************************************************************************************меька1 -->

<div style="position:relative;width:100%;height:370px;margin: 0 10px;display:none;" id="p2-1">
    <img style="position:absolute;top:0;left: 100px;width: 520px;" src=
    "https://image.jimcdn.com/app/cms/image/transf/dimension=910x10000:format=jpg/path/sd1623c3d59aeb736/image/i72e9aa5343f0ec20/version/1459281353/image.jpg" alt="" />
    <div style="position:absolute; left:146px;top:30px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(dlinna);
        //]]>
        </script><input type="text" id="size1" name="size1name" value="0" size="10" maxlength="5" onkeyup="f8p1()" />
    </div>

    <div style="position:absolute; left:435px;top:75px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(shirina);
        //]]>
        </script><input type="text" id="size2" name="size2name" value="0" size="10" maxlength="5" onkeyup="f8p1()" />
    </div>

    <div style="position:absolute; left:227px;top:137px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(dlinna);
        //]]>
        </script><input type="text" id="size1a" name="size1name" value="0" size="10" maxlength="5" onkeyup="f8p1()" />
    </div>

    <div style="position:absolute; left:35px;top:75px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(dlinna);
        //]]>
        </script><input type="text" id="size2a" name="size2name" value="0" size="5" maxlength="5" onkeyup="f8p1()" />
    </div>
    <select style="position:absolute; left:350px;top:35px;" id="select1" name="mySelect" onclick="f8p3();">
        <option value="0">
            Без обработки
        </option>
        <option value="1">
            Стеновой бортик
        </option>
        <option value="2">
            Торцевая кромка
        </option>
    </select> <select style="position:absolute; left:480px;top:105px;" id="select2" name="mySelect2" onclick="f8p3();">
        <option value="0">
            Без обработки
        </option>
        <option value="1">
            Стеновой бортик
        </option>
        <option value="2">
            Торцевая кромка
        </option>
    </select> <select style="position:absolute; left:265px;top:165px;" id="select3" name="mySelect3" onclick="f8p3();">
        <option value="0">
            Без обработки
        </option>
        <option value="1">
            Стеновой бортик
        </option>
        <option value="2">
            Торцевая кромка
        </option>
    </select> <select style="position:absolute; left:50px;top:105px;" id="select4" name="mySelect4" onclick="f8p3();">
        <option value="0">
            Без обработки
        </option>
        <option value="1">
            Стеновой бортик
        </option>
        <option value="2">
            Торцевая кромка
        </option>
    </select>
    <div style="position:absolute; left:10px;top:190px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(mvir);
        //]]>
        </script><br />
        <script type="text/javascript">
//<![CDATA[
        document.write(mvir1);
        //]]>
        </script><input type="checkbox" id="m1" name="moika" value="2" onclick="moika(this.id,'a')" /><br />
        <script type="text/javascript">
//<![CDATA[
        document.write(mvir2);
        //]]>
        </script> <input type="checkbox" id="m2" name="moika" value="2" onclick="moika(this.id,'b')" /><br />
    </div>

    <div style="position:absolute; left:10px;top:265px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(pvir);
        //]]>
        </script><br />
        <script type="text/javascript">
//<![CDATA[
        document.write(pvir1);
        //]]>
        </script><input type="checkbox" id="pl1" name="plita" value="2" onclick="plita(this.id,'a')" /><br />
        <script type="text/javascript">
//<![CDATA[
        document.write(pvir2);
        //]]>
        </script> <input type="checkbox" id="pl2" name="plita" value="2" onclick="plita(this.id,'b')" /><br />
    </div>

    <div style="position:absolute; left:10px;top:340px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(prots);
        //]]>
        </script><input type="checkbox" id="pp3" name="prot" value="2" onclick="protochka(this.id)" />
    </div>

    <div style="position:absolute; left:10px;top:365px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(kranio);
        //]]>
        </script> <input type="checkbox" id="kran1" name="kran" value="2" onclick="kran(this.id)" />
    </div>
</div>
<!--*********************************************************************************************************** метка -->

<div style="position:relative;width:100%;height:680px;margin: 0 10px;display:none;" id="p2-2">
    <img src="https://image.jimcdn.com/app/cms/image/transf/dimension=910x10000:format=jpg/path/sd1623c3d59aeb736/image/i6d6a82c156453d89/version/1459281363/image.jpg" style="" alt="" />
    <div style="margin: 0 10px; position: absolute;top: 35px;left: 310px;" id="p2-2-1">
        <script type="text/javascript">
//<![CDATA[
        document.write(dlinna);
        //]]>
        </script>
    </div>

    <div style="position: absolute;top: 34px;left: 425px;">
        <input type="text" id="size3" name="size1name" value="0" size="10" maxlength="5" onkeyup="f8p6()" />
    </div>

    <div style="margin: 0 10px;top: 115px;left:612px;position: absolute;" id="p1-1-2">
        <script type="text/javascript">
//<![CDATA[
        document.write(shirina);
        //]]>
        </script>
    </div>

    <div style="position: absolute;top: 135px;left: 621px;">
        <input type="text" id="size4" name="size2name" value="0" size="10" maxlength="5" onkeyup="f8p6()" />
    </div>

    <div style="margin: 0 10px;position: absolute;top: 265px;left: 347px;" id="p2-2-2">
        <script type="text/javascript">
//<![CDATA[
        document.write(dlinna);
        //]]>
        </script>
    </div>

    <div style="position: absolute;top: 285px;left: 356px;">
        <input type="text" id="size5" name="size1name" value="0" size="10" maxlength="5" onkeyup="f8p6()" />
    </div>

    <div style="margin: 0 10px;position: absolute;top: 400px;left: 233px;" id="p1-1-2">
        <script type="text/javascript">
//<![CDATA[
        document.write(dlinna);
        //]]>
        </script>
    </div>

    <div style="position: absolute;top: 420px;left: 252px;">
        <input type="text" id="size6" name="size2name" value="0" size="10" maxlength="5" onkeyup="f8p6()" />
    </div>

    <div style="margin: 0 10px; position: absolute; top: 227px; left: 123px;" id="asas">
        <script type="text/javascript">
//<![CDATA[
        document.write(dlinna);
        //]]>
        </script>
    </div>

    <div style="position: absolute; top: 248px; left: 141px;">
        <input type="text" id="sizes1" name="size2name" value="0" size="10" maxlength="5" onkeyup="f8p6()" />
    </div>

    <div style="margin: 0 10px; position: absolute; top: 197px; left: 479px;" id="asas1">
        <script type="text/javascript">
//<![CDATA[
        document.write(dlinna);
        //]]>
        </script>
    </div>

    <div style="position: absolute; top: 218px; left: 495px;">
        <input type="text" id="sizes2" name="size2name" value="0" size="10" maxlength="5" onkeyup="f8p6()" />
    </div>
    <select id="select11" name="mySelect5" onclick="f8p7();" style="position: absolute;top: 15px;left: 355px;">
        <option value="0">
            Geen randafwerking
        </option>
        <option value="1">
            Plintje
        </option>
        <option value="2">
            Randafwerking
        </option>
    </select> <select id="select22" name="mySelect6" onclick="f8p7();" style="position: absolute;top: 100px;left: 620px;">
        <option value="0">
            Без обработки
        </option>
        <option value="1">
            Стеновой бортик
        </option>
        <option value="2">
            Торцевая кромка
        </option>
    </select> <select id="select33" name="mySelect7" onclick="f8p7();" style="position:absolute;top:314px;left:356px;">
        <option value="0">
            Без обработки
        </option>
        <option value="1">
            Стеновой бортик
        </option>
        <option value="2">
            Торцевая кромка
        </option>
    </select> <select id="select44" name="mySelect8" onclick="f8p7();" style="position: absolute;top: 450px;left: 232px;">
        <option value="0">
            Без обработки
        </option>
        <option value="1">
            Стеновой бортик
        </option>
        <option value="2">
            Торцевая кромка
        </option>
    </select> <select id="select55" name="mySelect9" onclick="f8p7();" style="position: absolute; top: 208px; left: 100px;">
        <option value="0">
            Без обработки
        </option>
        <option value="1">
            Стеновой бортик
        </option>
        <option value="2">
            Торцевая кромка
        </option>
    </select> <select id="select66" name="mySelect10" onclick="f8p7();" style="position: absolute; top: 181px; left: 470px;">
        <option value="0">
            Без обработки
        </option>
        <option value="1">
            Стеновой бортик
        </option>
        <option value="2">
            Торцевая кромка
        </option>
    </select>
    <div style="position:absolute; left:10px;top:510px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(mvir);
        //]]>
        </script><br />
        <script type="text/javascript">
//<![CDATA[
        document.write(mvir1);
        //]]>
        </script><input type="checkbox" id="m3" name="moika" value="2" onclick="moika(this.id,'a')" /><br />
        <script type="text/javascript">
//<![CDATA[
        document.write(mvir2);
        //]]>
        </script><input type="checkbox" id="m4" name="moika" value="2" onclick="moika(this.id,'b')" /><br />
    </div>

    <div style="position:absolute; left:10px;top:580px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(pvir);
        //]]>
        </script><br />
        <script type="text/javascript">
//<![CDATA[
        document.write(pvir1);
        //]]>
        </script> <input type="checkbox" id="pl3" name="plita" value="2" onclick="plita(this.id,'a')" /><br />
        <script type="text/javascript">
//<![CDATA[
        document.write(pvir2);
        //]]>
        </script> <input type="checkbox" id="pl4" name="plita" value="2" onclick="plita(this.id,'b')" /><br />
    </div>

    <div style="position:absolute; left:10px;top:655px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(prots);
        //]]>
        </script><input type="checkbox" id="pp2" name="prot" value="2" onclick="protochka(this.id)" />
    </div>

    <div style="position:absolute; left:10px;top:678px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(kranio);
        //]]>
        </script> <input type="checkbox" id="kran2" name="kran" value="2" onclick="kran(this.id)" />
    </div>
</div>
<!-- ************************************************************************************************метка333 -->

<div style="position:relative;width:100%;height:700px;margin: 0 10px;display:none;" id="p2-3">
    <hr noshade="noshade" style="position:absolute;height: 243px;/*высота*/ width: 1px;/*толщина*/top: 310px;left: 405px;transform: rotate(-51deg);" />

    <hr noshade="noshade" style="position:absolute;height: 167px;/*высота*/ width: 1px;/*толщина*/top: 335px;left: 434px;transform: rotate(-51deg);" />

    <hr noshade="noshade" style="position:absolute;height: 108px;/*высота*/ width: 1px;/*толщина*/top: 284px;left: 417px;transform: rotate(60deg);" />

    <hr noshade="noshade" style="position:absolute;height: 29px;/*высота*/ width: 1px;/*толщина*/top: 64px;left: 403px;background-color: #fff;" />

    <hr noshade="noshade" style="position:absolute;height: 29px;/*высота*/ width: 1px;/*толщина*/top: 145px;left: 403px;background-color: #fff;" />
    <img src="https://image.jimcdn.com/app/cms/image/transf/dimension=910x10000:format=jpg/path/sd1623c3d59aeb736/image/id5773c570efab0f7/version/1459281373/image.jpg" style="" alt="" />
    <div style="margin: 0 10px;position: absolute; top: 248px; left: 68px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(dlinna);
        //]]>
        </script>
    </div>
    <input style="margin: 0 10px;position: absolute;top: 272px;left: 75px;" type="text" id="size7" name="size1name" value="0" size="10" maxlength="5" onkeyup="f8p10()" />
    <div style="margin: 0 10px;position: absolute;top: 379px;left: 186px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(shirina);
        //]]>
        </script>
    </div>
    <input style="margin: 0 10px;position: absolute; top: 405px; left: 192px;" type="text" id="size8" name="size2name" value="0" size="10" maxlength="5" onkeyup="f8p10()" />
    <div style="margin: 0 10px;position: absolute;top: 175px;left: 599px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(dlinna);
        //]]>
        </script>
    </div>
    <input id="size9" style="margin: 0 10px; position: absolute; top: 198px; left: 596px;" onkeyup="f8p10()" maxlength="5" name="size2name" size="10" type="text" value="0" />
    <div style="margin: 0 10px;position: absolute;top: 190px;left: 338px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(dlinna);
        //]]>
        </script>
    </div>
    <input id="size10" style="margin: 0 10px; position: absolute; top: 212px; left: 346px;" onkeyup="f8p10()" maxlength="5" name="size1name" size="10" type="text" value="0" />
    <div style="margin: 0 10px;position: absolute;top: 379px;left: 475px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(shirina);
        //]]>
        </script>
    </div>
    <input id="size11" style="margin: 0 10px;position: absolute; top: 405px; left: 480px;" onkeyup="f8p10()" maxlength="5" name="size2name" size="10" type="text" value="0" />
    <div style="margin: 0 10px; position: absolute;top: 104px;left: 335px;color: #fff;font-weight: bold;">
        <script type="text/javascript">
//<![CDATA[
        document.write(shirina);
        //]]>
        </script>
    </div>
    <input id="size12" style="margin: 0 10px;position: absolute; top: 127px; left: 346px;" onkeyup="f8p10()" maxlength="5" name="size2name" size="10" type="text" value="0" />
    <div style="margin: 0 10px; position: absolute; top: 500px; left: 496px; background-color: bisque;padding: 5px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(dlinna);
        //]]>
        </script><input id="size12a" style="margin: 0 10px;" onkeyup="f8p10()" maxlength="5" name="size2name" size="10" type="text" value="0" /> <select style="" id="select777" name="mySelect10"
        onclick="f8p11();">
            <option value="0">
                Без обработки
            </option>
            <option value="1">
                Стеновой бортик
            </option>
            <option value="2">
                Торцевая кромка
            </option>
        </select>
    </div>

    <div style="margin: 0 10px; position: absolute; top: 460px; left: 496px; background-color: lavender;padding: 5px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(dlinna);
        //]]>
        </script> <input id="size12b" style="margin: 0 10px;" onkeyup="f8p10()" maxlength="5" name="size2name" size="10" type="text" value="0" /> <select style="" id="select666" name="mySelect10"
        onclick="f8p11();">
            <option value="0">
                Без обработки
            </option>
            <option value="1">
                Стеновой бортик
            </option>
            <option value="2">
                Торцевая кромка
            </option>
        </select>
    </div>

    <div style="margin: 0 10px; position: absolute; top: 10px; left: 300px; background-color: powderblue; padding: 5px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(dlinna);
        //]]>
        </script> <input id="size12" style="margin: 0 10px;" onkeyup="f8p10()" maxlength="5" name="size2name" size="10" type="text" value="0" />
    </div>
    <select style="position: absolute; top: 297px; left: 43px;" id="select111" name="mySelect5" onclick="f8p11();">
        <option value="0">
            Без обработки
        </option>
        <option value="1">
            Стеновой бортик
        </option>
        <option value="2">
            Торцевая кромка
        </option>
    </select> <select style="position: absolute; top: 431px; left: 177px;" id="select222" name="mySelect6" onclick="f8p11();">
        <option value="0">
            Без обработки
        </option>
        <option value="1">
            Стеновой бортик
        </option>
        <option value="2">
            Торцевая кромка
        </option>
    </select> <select style="position: absolute; top: 223px; left: 606px;" id="select333" name="mySelect7" onclick="f8p11();">
        <option value="0">
            Без обработки
        </option>
        <option value="1">
            Стеновой бортик
        </option>
        <option value="2">
            Торцевая кромка
        </option>
    </select> <select style="position: absolute; top: 236px; left: 328px;" id="select444" name="mySelect8" onclick="f8p11();">
        <option value="0">
            Без обработки
        </option>
        <option value="1">
            Стеновой бортик
        </option>
        <option value="2">
            Торцевая кромка
        </option>
    </select> <select style="position: absolute; top: 431px; left: 472px;" id="select555" name="mySelect9" onclick="f8p11();">
        <option value="0">
            Без обработки
        </option>
        <option value="1">
            Стеновой бортик
        </option>
        <option value="2">
            Торцевая кромка
        </option>
    </select> <select style="position: absolute; top: 46px; left: 347px;" id="select888" name="mySelect10" onclick="f8p11();">
        <option value="0">
            Без обработки
        </option>
        <option value="1">
            Стеновой бортик
        </option>
        <option value="2">
            Торцевая кромка
        </option>
    </select>
    <div style="position:absolute; left:10px;top:530px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(mvir);
        //]]>
        </script><br />
        <script type="text/javascript">
//<![CDATA[
        document.write(mvir1);
        //]]>
        </script><input type="checkbox" id="m5" name="moika" value="2" onclick="moika(this.id,'a')" /><br />
        <script type="text/javascript">
//<![CDATA[
        document.write(mvir2);
        //]]>
        </script><input type="checkbox" id="m6" name="moika" value="2" onclick="moika(this.id,'b')" /><br />
    </div>

    <div style="position:absolute; left:10px;top:601px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(pvir);
        //]]>
        </script><br />
        <script type="text/javascript">
//<![CDATA[
        document.write(pvir1);
        //]]>
        </script> <input type="checkbox" id="pl5" name="plita" value="2" onclick="plita(this.id,'a')" /><br />
        <script type="text/javascript">
//<![CDATA[
        document.write(pvir2);
        //]]>
        </script> <input type="checkbox" id="pl6" name="plita" value="2" onclick="plita(this.id,'b')" /><br />
    </div>

    <div style="position:absolute; left:10px;top:670px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(prots);
        //]]>
        </script><input type="checkbox" id="pp1" name="prot" value="2" onclick="protochka(this.id)" />
    </div>

    <div style="position:absolute; left:10px;top:690px;">
        <script type="text/javascript">
//<![CDATA[
        document.write(kranio);
        //]]>
        </script> <input type="checkbox" id="kran3" name="kran" value="2" onclick="kran(this.id)" />
    </div>
</div>

<div style="padding: 10px;cursor:pointer;display:none" id="p7-122">
</div>

<div style="cursor:pointer;padding: 10px;background-color: #87c7c9;color:#2e2e2e;margin-bottom: 10px;margin-top:10px" onclick=
"if(document.getElementById('ostrov').style.display==='none'){document.getElementById('ostrov').style.display='block';}else{document.getElementById('ostrov').style.display='none';}">
    <h3>
        <script type="text/javascript">
//<![CDATA[
        document.write(title3);
        //]]>
        </script>
    </h3>
</div>

<div style="margin: 0 10px;display:none" id="ostrov">
    <span style="margin: 0 10px;cursor:pointer;" id="ostrov1"><script type="text/javascript">
//<![CDATA[
    document.write(dlinna);
    //]]>
    </script></span> <input type="text" id="size103" name="size1name" value="0" size="10" maxlength="5" /> <span style="margin: 0 10px;cursor:pointer;" id="ostrov2"><script type="text/javascript">
//<![CDATA[
    document.write(shirina);
    //]]>
    </script></span> <input type="text" id="size104" name="size2name" value="0" size="10" maxlength="5" />
</div>

<div style="cursor: pointer; padding: 10px; background-color: #87c7c9; color:#2e2e2e;margin-bottom: 10px; margin-top: 10px;" onclick=
"if(document.getElementById('tabl').style.display==='none'){document.getElementById('tabl').style.display='block'}else{document.getElementById('tabl').style.display='none'}">
    <h3>
        <script type="text/javascript">
//<![CDATA[
        document.write(title4);
        //]]>
        </script>
    </h3>
</div>

<table style="margin: 0 auto;display:none;" id="tabl" name="st">
    <tr>
        <td>
            <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/i0e7dff174a90a222/version/1459343059/image.jpg" id="kr1" style=
            "width:175px;height:150px;cursor:pointer;" onclick="f8p14(this.id)" alt="" name="kr1" /><br />
            Прямая<br />
        </td>
        <td>
            <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/i9af7e90a0840cce2/version/1459343065/image.jpg" id="kr2" style=
            "width:175px;height:150px;cursor:pointer;" onclick="f8p14(this.id)" alt="" name="kr2" /><br />
            Закругленная<br />
        </td>
    </tr>

    <tr>
        <td>
            <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/i3d2cb6f1fa125ab2/version/1459343071/image.jpg" id="kr3" style=
            "width:175px;height:150px;cursor:pointer;" onclick="f8p14(this.id)" alt="" name="kr3" /><br />
            Утолщенная<br />
        </td>
        <td>
            <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sd1623c3d59aeb736/image/i648f6049e78eef79/version/1459343077/image.jpg" id="kr4" style=
            "width:175px;height:150px;cursor:pointer;" onclick="f8p14(this.id)" alt="" name="kr4" /><br />
            Папугай<br />
        </td>
    </tr>
</table>

<div style="padding: 10px;cursor:pointer;background-color: #87c7c9;color:#2e2e2e;margin-bottom: 10px;margin-top:10px" onclick=
"if(document.getElementById('pristen').style.display==='none'){document.getElementById('pristen').style.display='block';}else{document.getElementById('pristen').style.display='none';}">
    <h3>
        <script type="text/javascript">
//<![CDATA[
        document.write(title5);
        //]]>
        </script>
    </h3>
</div>

<div>
    <div id="pristen" style="display:none;">
        <div src="/data/buttons/but1.jpg" id="kr12" style="cursor:pointer;">
            Стеновая панель
        </div>
        <br />

        <div style="margin: 0 10px;" id="p6-1">
            <span style="margin: 0 10px;cursor:pointer;" id="stena1"><script type="text/javascript">
//<![CDATA[
            document.write(visotan);
            //]]>
            </script></span> <input type="text" id="size13" name="size6name" value="0" size="10" maxlength="5" onkeyup="f8p16()" /> <span style="margin: 0 10px;cursor:pointer;" id=
            "stena2"><script type="text/javascript">
//<![CDATA[
            document.write(dlinna);
            //]]>
            </script></span> <input type="text" id="size14" name="size6name" value="0" size="10" maxlength="5" onkeyup="f8p16()" />
        </div>
        <br />
    </div>

    <div style="padding: 10px;background-color: #87c7c9;color:#2e2e2e;margin-bottom: 10px;margin-top:10px;cursor:pointer;" onclick=
    "if(document.getElementById('p6-2').style.display==='none'){document.getElementById('p6-2').style.display='block';}else{document.getElementById('p6-2').style.display='none';}">
        <h3>
            <script type="text/javascript">
//<![CDATA[
            document.write(title6);
            //]]>
            </script>
        </h3>
    </div>

    <div style="margin: 0 10px;display:none;" id="p6-2">
        <span style="margin: 0 10px;cursor:pointer;" id=""><script type="text/javascript">
//<![CDATA[
        document.write(visotan);
        //]]>
        </script></span> <input type="text" id="bortvisotka" name="size1name" value="0" size="10" maxlength="5" onkeyup="f8p26()" />
    </div>
</div>

<div style="cursor:pointer;padding: 10px;background-color: #87c7c9;color:#2e2e2e;margin-bottom: 10px;margin-top:10px" onclick=
"if(document.getElementById('finis').style.display==='none'){document.getElementById('finis').style.display='block';}else{document.getElementById('finis').style.display='none';}">
    <h3>
        <script type="text/javascript">
//<![CDATA[
        document.write(title7);
        //]]>
        </script>
    </h3>
</div>

<div style="display:none;" id="finis">
    <div style="padding: 10px;">
        <strong><script type="text/javascript">
//<![CDATA[
        document.write(samer);
        //]]>
        </script><input type="checkbox" id="chZ" name="checkbox13" onclick="zamerus()" /></strong>
    </div>

    <div style="padding: 10px;">
        <strong><script type="text/javascript">
//<![CDATA[
        document.write(dastaffka);
        //]]>
        </script><input type="checkbox" id="ch14" name="checkbox14" onclick="f8p21()" /></strong>
    </div>

    <div style="padding: 10px;">
        <strong id="wlift"><script type="text/javascript">
//<![CDATA[
        document.write(poddy);
        //]]>
        </script></strong> <input type="checkbox" id="ch15" name="checkbox15" onclick="f8p22()" />
    </div>

    <div style="padding: 10px;" id="test1" onclick="test()">
        <button onclick="test()"><script type="text/javascript">
//<![CDATA[
        document.write(how);
        //]]>
        </script></button>
    </div>

    <div id="fin">
    </div>
</div>
</div>
<button style="margin:30px;" onclick="prints('printy')">РАСПЕЧАТАТЬ</button>
<script type="text/javascript">
// <![CDATA[
var zamer1=0;
var civ=0;
var dad="";
var n6=0;
var n61=0;
var nn6=0;
var n1=0;
var n2=0;
var bort=0;
var bortpogon=0;
var torts=0;
var tortspogon=0;
var n3=0;
var n4=0;
var n5=0;
var n7=0;
var bars=0;
var bartorts=0;
var barradius=0;
var ost=0;
var osttorts=0;
var ostradius=0;
var checky=0;
var dostavka1=0;
var lift=0;
var lift1=0;
var plosh1=0;var barplosh1=0;var radstol=0;var radbar=0;var radost=0;
var cheche=[0,0];var gregre=[0,0];var plipli=[0,0];var momo=[0,0];
var momo2=[0,0];var momo3=[0,0];var zamzam=[0,0];var dosdos=[0,0];liflif=[0,0];
var mat=itog3;var stenplosh=0;var ostplosh=0;
var tt1=document.getElementById("p1-1");
var tt2=document.getElementById("p1-2");
var tt3=document.getElementById("p1-3");
var tt8=document.getElementById("p2-1");
var tt9=document.getElementById("p2-2");
var tt10=document.getElementById("p2-3");
var tt11=document.getElementById("p6-1");
var tt12=document.getElementById("p6-2");


function f1(){
if(tt1.style.display==="block"){tt1.style.display="none"}else{tt1.style.display="block"}
if(tt2.style.display==="block"){tt2.style.display="none"}
if(tt3.style.display==="block"){tt3.style.display="none"}
}
function f2(){
if(tt2.style.display==="block"){tt2.style.display="none"}else{tt2.style.display="block"}
if(tt1.style.display==="block"){tt1.style.display="none"}
if(tt3.style.display==="block"){tt3.style.display="none"}
}
function f3(){
if(tt3.style.display==="block"){tt3.style.display="none"}else{tt3.style.display="block"}
if(tt1.style.display==="block"){tt1.style.display="none"}
if(tt2.style.display==="block"){tt2.style.display="none"}
}
function f4(){
if(tt1.style.display==="block"){tt1.style.display="none"}
if(tt2.style.display==="block"){tt2.style.display="none"}
if(tt3.style.display==="block"){tt3.style.display="none"}
}
function f5(){
if(tt1.style.display==="block"){tt1.style.display="none"}
if(tt2.style.display==="block"){tt2.style.display="none"}
if(tt3.style.display==="block"){tt3.style.display="none"}
}
function f6(){
if(tt1.style.display==="block"){tt1.style.display="none"}
if(tt2.style.display==="block"){tt2.style.display="none"}
if(tt3.style.display==="block"){tt3.style.display="none"}
}

function f7(){
if(tt1.style.display==="block"){tt1.style.display="none"}
if(tt2.style.display==="block"){tt2.style.display="none"}
if(tt3.style.display==="block"){tt3.style.display="none"}
}

function f8(){
if(tt8.style.display==="block"){tt8.style.display="none";document.getElementById("p7-122").style.display="none";}else{tt8.style.display="block";document.getElementById("p7-122").style.display="block";}
if(tt9.style.display==="block"){tt9.style.display="none"}
if(tt10.style.display==="block"){tt10.style.display="none"}
clear1();
}

function f9(){
if(tt9.style.display==="block"){tt9.style.display="none";document.getElementById("p7-122").style.display="none";}else{tt9.style.display="block";document.getElementById("p7-122").style.display="block";}
if(tt8.style.display==="block"){tt8.style.display="none"}
if(tt10.style.display==="block"){tt10.style.display="none"}
clear1();
}
function f10(){
if(tt10.style.display==="block"){tt10.style.display="none";document.getElementById("p7-122").style.display="none";}else{tt10.style.display="block";document.getElementById("p7-122").style.display="block";}
if(tt8.style.display==="block"){tt8.style.display="none"}
if(tt9.style.display==="block"){tt9.style.display="none"}
clear1();
}
function f1p1(){n1=material1[0];
var ma = document.getElementsByTagName("input");document.getElementById("p1-1-1").style.outlineStyle="solid";document.getElementById("p1-1-1").style.outlineColor="green";
var matamata=document.getElementsByClassName("material");
for (i=0;i<matamata.length;i++){if(matamata[i].id!="p1-1-1"){matamata[i].style.outlineStyle="none"}}
for (i=0;i<ma.length;i++){ma[i].value=0;}
mat=material1[1];
}
function f1p2(){n1=material2[0];
var ma = document.getElementsByTagName("input");document.getElementById("p1-1-2").style.outlineStyle="solid";document.getElementById("p1-1-2").style.outlineColor="green";var matamata=document.getElementsByClassName("material");for (i=0;i<matamata.length;i++){if(matamata[i].id!="p1-1-2"){matamata[i].style.outlineStyle="none"}}
for (i=0;i<ma.length;i++){ma[i].value=0;}
mat=material2[1];
}
function f1p3(){n1=material3[0];
var ma = document.getElementsByTagName("input");document.getElementById("p1-1-3").style.outlineStyle="solid";document.getElementById("p1-1-3").style.outlineColor="green";var matamata=document.getElementsByClassName("material");for (i=0;i<matamata.length;i++){if(matamata[i].id!="p1-1-3"){matamata[i].style.outlineStyle="none"}}
for (i=0;i<ma.length;i++){ma[i].value=0;}
mat=material3[1];}
function f1p4(){n1=material4[0];
var ma = document.getElementsByTagName("input");document.getElementById("p1-1-4").style.outlineStyle="solid";document.getElementById("p1-1-4").style.outlineColor="green";var matamata=document.getElementsByClassName("material");for (i=0;i<matamata.length;i++){if(matamata[i].id!="p1-1-4"){matamata[i].style.outlineStyle="none"}}
for (i=0;i<ma.length;i++){ma[i].value=0;}
mat=material4[1];
}
function f1p5(){n1=material5[0];
var ma = document.getElementsByTagName("input");document.getElementById("p1-1-5").style.outlineStyle="solid";document.getElementById("p1-1-5").style.outlineColor="green";var matamata=document.getElementsByClassName("material");for (i=0;i<matamata.length;i++){if(matamata[i].id!="p1-1-5"){matamata[i].style.outlineStyle="none"}}
for(i=0;i<ma.length;i++){ma[i].value=0;}
mat=material5[1];
}
function f1p6(){n1=material6[0];
var ma = document.getElementsByTagName("input");document.getElementById("p1-1-6").style.outlineStyle="solid";document.getElementById("p1-1-6").style.outlineColor="green";var matamata=document.getElementsByClassName("material");for (i=0;i<matamata.length;i++){if(matamata[i].id!="p1-1-6"){matamata[i].style.outlineStyle="none"}}
for (i=0;i<ma.length;i++){ma[i].value=0;}
mat=material6[1];
}
function f1p7(){n1=material7[0];
var ma = document.getElementsByTagName("input");document.getElementById("p1-1-7").style.outlineStyle="solid";document.getElementById("p1-1-7").style.outlineColor="green";var matamata=document.getElementsByClassName("material");for (i=0;i<matamata.length;i++){if(matamata[i].id!="p1-1-7"){matamata[i].style.outlineStyle="none"}}
for (i=0;i<ma.length;i++){ma[i].value=0;}
mat=material7[1];
}
function f1p8(){n1=material8[0];
var ma = document.getElementsByTagName("input");document.getElementById("p1-1-8").style.outlineStyle="solid";document.getElementById("p1-1-8").style.outlineColor="green";var matamata=document.getElementsByClassName("material");for (i=0;i<matamata.length;i++){if(matamata[i].id!="p1-1-8"){matamata[i].style.outlineStyle="none"}}
for (i=0;i<ma.length;i++){ma[i].value=0;}
mat=material8[1];
}
function f2p1(){n1=material9[0];
var ma = document.getElementsByTagName("input");document.getElementById("p1-1-9").style.outlineStyle="solid";document.getElementById("p1-1-9").style.outlineColor="green";var matamata=document.getElementsByClassName("material");for (i=0;i<matamata.length;i++){if(matamata[i].id!="p1-1-9"){matamata[i].style.outlineStyle="none"}}
for (i=0;i<ma.length;i++){ma[i].value=0;}
mat=material9[1];
}
function f2p2(){n1=material10[0];
var ma = document.getElementsByTagName("input");document.getElementById("p1-1-10").style.outlineStyle="solid";document.getElementById("p1-1-10").style.outlineColor="green";var matamata=document.getElementsByClassName("material");for (i=0;i<matamata.length;i++){if(matamata[i].id!="p1-1-10"){matamata[i].style.outlineStyle="none"}}
for (i=0;i<ma.length;i++){ma[i].value=0;}
mat=material10[1];
}
function f2p3(){n1=material11[0];
var ma = document.getElementsByTagName("input");document.getElementById("p1-1-11").style.outlineStyle="solid";document.getElementById("p1-1-11").style.outlineColor="green";var matamata=document.getElementsByClassName("material");for (i=0;i<matamata.length;i++){if(matamata[i].id!="p1-1-11"){matamata[i].style.outlineStyle="none"}}
for (i=0;i<ma.length;i++){ma[i].value=0;}
mat=material11[1];
}

function f3p1(){n1=material12[0];
var ma = document.getElementsByTagName("input");document.getElementById("p1-1-12").style.outlineStyle="solid";document.getElementById("p1-1-12").style.outlineColor="green";var matamata=document.getElementsByClassName("material");for (i=0;i<matamata.length;i++){if(matamata[i].id!="p1-1-12"){matamata[i].style.outlineStyle="none"}}
for (i=0;i<ma.length;i++){ma[i].value=0;}
mat=material12[1];
}
function f3p2(){n1=material13[0];
var ma = document.getElementsByTagName("input");document.getElementById("p1-1-13").style.outlineStyle="solid";document.getElementById("p1-1-13").style.outlineColor="green";var matamata=document.getElementsByClassName("material");for (i=0;i<matamata.length;i++){if(matamata[i].id!="p1-1-13"){matamata[i].style.outlineStyle="none"}}
for (i=0;i<ma.length;i++){ma[i].value=0;}
mat=material13[1];
}
function f3p3(){n1=material14[0];
var ma = document.getElementsByTagName("input");document.getElementById("p1-1-14").style.outlineStyle="solid";document.getElementById("p1-1-14").style.outlineColor="green";var matamata=document.getElementsByClassName("material");for (i=0;i<matamata.length;i++){if(matamata[i].id!="p1-1-14"){matamata[i].style.outlineStyle="none"}}
for (i=0;i<ma.length;i++){ma[i].value=0;}
mat=material14[1];
}
function f8p1(){
                                tilt();
                                n2=0;
                                var q1=document.getElementById("size1").value;
                                var q2=document.getElementById("size2").value;
                                n2=parseInt(q2)*parseInt(q1);
                                plosh1=n2;
                                n2=(n1/1000000)*parseInt(n2);
                                f8p3();
                                }
function f8p3(){
                                bort=0;
                                torts=0;
                                tortspogon=0;
                                bortpogon=0;
                                var q1=document.getElementById("select1").value;
                                var q2=document.getElementById("select2").value;
                                var q3=document.getElementById("select3").value;
                                var q4=document.getElementById("select4").value;
                                        if(parseInt(q1)===1){bort=bort+1;}
                                        if(parseInt(q1)===2){torts=torts+1;}
                                        if(parseInt(q2)===1){bort=bort+1;}
                                        if(parseInt(q2)===2){torts=torts+1;}
                                        if(parseInt(q3)===1){bort=bort+1;}
                                        if(parseInt(q3)===2){torts=torts+1;}
                                        if(parseInt(q4)===1){bort=bort+1;}
                                        if(parseInt(q4)===2){torts=torts+1;}
                                if(parseInt(q1)===1){bortpogon=bortpogon+parseInt(document.getElementById("size1").value);}
                                if(parseInt(q1)===2){tortspogon=tortspogon+parseInt(document.getElementById("size1").value);}
                                if(parseInt(q3)===1){bortpogon=bortpogon+parseInt(document.getElementById("size1a").value);}
                                if(parseInt(q3)===2){tortspogon=tortspogon+parseInt(document.getElementById("size1a").value);}
                                if(parseInt(q2)===1){bortpogon=bortpogon+parseInt(document.getElementById("size2").value);}
                                if(parseInt(q2)===2){tortspogon=tortspogon+parseInt(document.getElementById("size2").value);}
                                if(parseInt(q4)===1){bortpogon=bortpogon+parseInt(document.getElementById("size2a").value);}
                                if(parseInt(q4)===2){tortspogon=tortspogon+parseInt(document.getElementById("size2a").value);}
                                console.log(bortpogon);
                                console.log(tortspogon);
                                }
function f8p4(){
                                var ugol=document.getElementById("p2-1-a").value;
                                        n3=parseInt(ugol);
                                        if(n3<0 || n3>4){
                                        document.getElementById("p2-1-a").value="0";
                                        }
                                        else{
                                        console.log(n3);
                                        }       
                                }
function f8p5(){
                                var checky=0;
                                        var rot1=document.getElementById("ch1");
                                        var rot2=document.getElementById("ch2");
                                        var rot3=document.getElementById("ch3");
                                        if(rot1.checked){
                                                checky=protochka;
                                                }else{checky=0;}
                                        if(rot2.checked){
                                                                                                checky=protochka;
                                                }else{checky=0;}
                                        if(rot3.checked){
                                                checky=protochka;
                                                }else{checky=0;}
                                }
                                                        
function f8p5a(){
                                  var checky=0;
                                        var rot1=document.getElementById("ch1");
                                        var rot2=document.getElementById("ch2");
                                        var rot3=document.getElementById("ch3");
                                        if(rot1.checked){
                                                checky=protochka;
                                                }else{checky=0;}
                                        if(rot2.checked){
                                                                                                checky=protochka;
                                                }else{checky=0;}
                                        if(rot3.checked){
                                                checky=protochka;
                                                }else{checky=0;}
                                }
function f8p5b(){
                                 var checky=0;
                                        var rot1=document.getElementById("ch1");
                                        var rot2=document.getElementById("ch2");
                                        var rot3=document.getElementById("ch3");
                                        if(rot1.checked){
                                                checky=protochka;
                                                }else{checky=0;}
                                        if(rot2.checked){
                                                                                                checky=protochka;
                                                }else{checky=0;}
                                        if(rot3.checked){
                                                checky=protochka;
                                                }else{checky=0;}
                                }
function f8p6(){
                                n2=0;
                                var q1=document.getElementById("size3").value;
                                var q2=document.getElementById("size4").value;
                                var q3=document.getElementById("size5").value;
                                var q4=document.getElementById("size6").value;
                                var q5=document.getElementById("sizes1").value;
                                var q6=document.getElementById("sizes2").value;
                                n2=(parseInt(q1)*parseInt(q2))+(parseInt(q3)*parseInt(q4));
                                plosh1=n2;
                                n2=(n1/1000000)*parseInt(n2);
                                f8p7();
                                }
function f8p7(){
                                bort=0;
                                torts=0;
                                bortpogon=0;
                                tortspogon=0;
                                var q1=document.getElementById("select11").value;
                                var q2=document.getElementById("select22").value;
                                var q3=document.getElementById("select33").value;
                                var q4=document.getElementById("select44").value;
                                var q5=document.getElementById("select55").value;
                                var q6=document.getElementById("select66").value;
                                        if(parseInt(q1)===1){bort=bort+1;}
                                        if(parseInt(q1)===2){torts=torts+1;}
                                        if(parseInt(q2)===1){bort=bort+1;}
                                        if(parseInt(q2)===2){torts=torts+1;}
                                        if(parseInt(q3)===1){bort=bort+1;}
                                        if(parseInt(q3)===2){torts=torts+1;}
                                        if(parseInt(q4)===1){bort=bort+1;}
                                        if(parseInt(q4)===2){torts=torts+1;}
                                        if(parseInt(q5)===1){bort=bort+1;}
                                        if(parseInt(q5)===2){torts=torts+1;}
                                        if(parseInt(q6)===1){bort=bort+1;}
                                        if(parseInt(q6)===2){torts=torts+1;}
                                if(parseInt(q1)===1){bortpogon=bortpogon+parseInt(document.getElementById("size3").value);}
                                if(parseInt(q1)===2){tortspogon=tortspogon+parseInt(document.getElementById("size3").value);}
                                if(parseInt(q2)===1){bortpogon=bortpogon+parseInt(document.getElementById("size4").value);}
                                if(parseInt(q2)===2){tortspogon=tortspogon+parseInt(document.getElementById("size4").value);}
                                if(parseInt(q5)===1){bortpogon=bortpogon+parseInt(document.getElementById("sizes1").value);}
                                if(parseInt(q5)===2){tortspogon=tortspogon+parseInt(document.getElementById("sizes1").value);}
                                if(parseInt(q3)===1){bortpogon=bortpogon+parseInt(document.getElementById("size5").value);}
                                if(parseInt(q3)===2){tortspogon=tortspogon+parseInt(document.getElementById("size5").value);}
                                if(parseInt(q4)===1){bortpogon=bortpogon+parseInt(document.getElementById("size6").value);}
                                if(parseInt(q4)===2){tortspogon=tortspogon+parseInt(document.getElementById("size6").value);}
                                if(parseInt(q6)===1){bortpogon=bortpogon+parseInt(document.getElementById("sizes2").value);}
                                if(parseInt(q6)===2){tortspogon=tortspogon+parseInt(document.getElementById("sizes2").value);}
                                
                                console.log(bortpogon);
                                console.log(tortspogon);
                                }       
function f8p8(){
                                var ugol=document.getElementById("p2-2-a").value;
                                        n3=parseInt(ugol);
                                        if(n3<0 || n3>6){
                                        document.getElementById("p2-2-a").value="0";
                                        }
                                        else{
                                        console.log(n3);
                                        }       
                                }
function f8p10(){
                                n2=0;
                                var q1=document.getElementById("size7").value;
                                var q2=document.getElementById("size8").value;
                                var q3=document.getElementById("size9").value;
                                var q4=document.getElementById("size10").value;
                                var q5=document.getElementById("size11").value;
                                var q6=document.getElementById("size12").value;
                                n2=(parseInt(q1)*parseInt(q2))+(parseInt(q4)*parseInt(q6))+(parseInt(q3)*parseInt(q5));
                                plosh1=n2;
                                n2=(n1/1000000)*parseInt(n2);
                                }
                                                                var virezmoika=0;var virezplita=0;kranchik=0;
function moika(id,variant){
virezmoika=0;
idol=id;variant=variant;
var ded=document.getElementsByName("moika");
for (i=0;i<ded.length;i++){
                                if(ded[i].id!=idol){
                                        ded[i].checked=false;
                                        }
                                }
        if(document.getElementById(idol).checked===true){
                                switch (variant){
                                        case 'a':
                                        virezmoika=moika1
                                        break
                                        case 'b':
                                        virezmoika=moika2
                                        break
                                        default:
                                        virezmoika=0
                                        break
                                        }
                                }
                                console.log(virezmoika);
}
function plita(id,variant){
virezplita=0;
idol=id;variant=variant;
var ded=document.getElementsByName("plita");
for (i=0;i<ded.length;i++){
                                if(ded[i].id!=idol){
                                        ded[i].checked=false;
                                        }
                                }
        if(document.getElementById(idol).checked===true){
                                switch (variant){
                                        case 'a':
                                        virezplita=virez1
                                        break
                                        case 'b':
                                        virezplita=virez2
                                        break
                                        default:
                                        virezplita=0
                                        break
                                        }
                                }
                                console.log(virezplita);
}
function kran(id){
idol=id;
var ded=document.getElementsByName("kran");
for (i=0;i<ded.length;i++){
                                if(ded[i].id!=idol){
                                        ded[i].checked=false;
                                        }else{
                                        if(ded[i].checked===true){
                                                kranchik=kranello;
                                                }else{
                                                        kranchik=0;
                                                        }
                                        }
                                }
}
var protik=0;
function protochka(id){
idol=id;
var ded=document.getElementsByName("prot");
for (i=0;i<ded.length;i++){
                                if(ded[i].id!=idol){
                                        ded[i].checked=false;
                                        }else{
                                        if(ded[i].checked===true){
                                                protik=protochkaZ;
                                                }else{
                                                        protik=0;
                                                        }
                                        }
                                }
}
var zammy=0;
function zamerus(){
if(document.getElementById("chZ").checked===true){
        zammy=zamer;
        }else{
                zammy=0;
                }
}
function f8p11(){
                                bort=0;
                                torts=0;bortpogon=0;tortspogon=0;
                                var q1=document.getElementById("select111").value;
                                var q2=document.getElementById("select222").value;
                                var q3=document.getElementById("select333").value;
                                var q4=document.getElementById("select444").value;
                                var q5=document.getElementById("select555").value;
                                var q6=document.getElementById("select666").value;
                                var q7=document.getElementById("select777").value;
                                var q8=document.getElementById("select888").value;
                                        if(parseInt(q1)===1){bort=bort+1;}
                                        if(parseInt(q1)===2){torts=torts+1;}
                                        if(parseInt(q2)===1){bort=bort+1;}
                                        if(parseInt(q2)===2){torts=torts+1;}
                                        if(parseInt(q3)===1){bort=bort+1;}
                                        if(parseInt(q3)===2){torts=torts+1;}
                                        if(parseInt(q4)===1){bort=bort+1;}
                                        if(parseInt(q4)===2){torts=torts+1;}
                                        if(parseInt(q5)===1){bort=bort+1;}
                                        if(parseInt(q5)===2){torts=torts+1;}
                                        if(parseInt(q6)===1){bort=bort+1;}
                                        if(parseInt(q6)===2){torts=torts+1;}
                                        if(parseInt(q7)===1){bort=bort+1;}
                                        if(parseInt(q7)===2){torts=torts+1;}
                                        if(parseInt(q8)===1){bort=bort+1;}
                                        if(parseInt(q8)===2){torts=torts+1;}
                                if(parseInt(q1)===1){bortpogon=bortpogon+parseInt(document.getElementById("size7").value);}
                                if(parseInt(q1)===2){tortspogon=tortspogon+parseInt(document.getElementById("size7").value);}
                                if(parseInt(q2)===1){bortpogon=bortpogon+parseInt(document.getElementById("size8").value);}
                                if(parseInt(q2)===2){tortspogon=tortspogon+parseInt(document.getElementById("size8").value);}
                                if(parseInt(q5)===1){bortpogon=bortpogon+parseInt(document.getElementById("size11").value);}
                                if(parseInt(q5)===2){tortspogon=tortspogon+parseInt(document.getElementById("size11").value);}
                                if(parseInt(q3)===1){bortpogon=bortpogon+parseInt(document.getElementById("size9").value);}
                                if(parseInt(q3)===2){tortspogon=tortspogon+parseInt(document.getElementById("size9").value);}
                                if(parseInt(q4)===1){bortpogon=bortpogon+parseInt(document.getElementById("size10").value);}
                                if(parseInt(q4)===2){tortspogon=tortspogon+parseInt(document.getElementById("size10").value);}
                                if(parseInt(q6)===1){bortpogon=bortpogon+parseInt(document.getElementById("size12b").value);}
                                if(parseInt(q6)===2){tortspogon=tortspogon+parseInt(document.getElementById("size12b").value);}
                                if(parseInt(q7)===1){bortpogon=bortpogon+parseInt(document.getElementById("size12a").value);}
                                if(parseInt(q7)===2){tortspogon=tortspogon+parseInt(document.getElementById("size12a").value);}
                                if(parseInt(q8)===1){bortpogon=bortpogon+parseInt(document.getElementById("size12").value);}
                                if(parseInt(q8)===2){tortspogon=tortspogon+parseInt(document.getElementById("size12").value);}
                                console.log(bortpogon);
                                console.log(tortspogon);
                                }       
function f8p12(){
                                var ugol=document.getElementById("p2-3-a").value;
                                        n3=parseInt(ugol);
                                        if(n3<0 || n3>8){
                                        document.getElementById("p2-3-a").value="0";
                                        }
                                        else{
                                        console.log(n3);
                                        }       
                                }
function f8p14(idol) {
n5=0;
var idol=idol;
        var mass=document.getElementsByTagName("img");
        for (i=0;i<mass.length;i++){
        if(mass[i].id!==idol && mass[i].id!=="brt1" && mass[i].id!=="brt2"){
        mass[i].style.outline="0px solid green";
        //mass[i].style.borderWidth="0px";
        //mass[i].style.borderColor="white";
        }
        else{
        if(mass[i].id!=="brt1" && mass[i].id!=="brt2"){
        mass[i].style.outline="3px solid green";
        //mass[i].style.borderColor="red";
        //mass[i].style.borderWidth="2px";
        }
        }}
        switch(idol){
        case "kr1":
        n5=kromkav1;console.log(n5);break
        case "kr2":
        n5=kromkav2;console.log(n5);break
        case "kr3":
        n5=kromkav3;console.log(n5);break
        case "kr4":
        n5=kromkav4;console.log(n5);break
        default:
        n5=0;console.log("NOT");break
        }

}

function f8p16(){
                                n6=0;
                                var q1=document.getElementById("size13").value;
                                var q2=document.getElementById("size14").value;
                                stenplosh=parseInt(q1)*parseInt(q2);
                                stenplosh=stenplosh/1000000;
                                n6=(parseInt(q1)*parseInt(q2))*(n1/1000000);
                                console.log(n6);
                                n61=n6;
        }
function f8p18(e) {
        nn6=0;
        e = e || window.event;
        var el = e.target || e.srcElement;

        if(el.id==="brt1"){
        document.getElementById("brt1").style.border = "2px solid red";
        document.getElementById("brt2").style.border = "2px solid white";
        }else if (el.id==="brt2"){
        document.getElementById("brt2").style.border = "2px solid red";
        document.getElementById("brt1").style.border = "2px solid white";       }
        
        switch(el.id){
        case "brt1":
        nn6=bortik1;console.log(nn6);break
        case "brt2":
        nn6=bortik2;console.log(nn6);break
        default:
        nn6=0;console.log("NOT");break
        }
        }
function f8p19(){
                                var ugol=document.getElementById("p7-1-a").value;
                                        n7=parseInt(ugol);
                                        if(n7<0 || n7>100){
                                        document.getElementById("p7-1-a").value="0";
                                        }
                                        else{
                                        radstol=n7;
                                        n7=n7*radiusi;
                                        console.log(n7);
                                        }
                                
                                }
function f8p20(){
                                var zamzz=0;
                                        var rot1=document.getElementById("ch13");
                                        if(rot1.checked){
                                                zamzz=zamer;
                                                }else{
                                                        zamzz=0;
                                                }
                                }
                                                                var dostavon=0;
function f8p21(){

                                        var rot2=document.getElementById("ch14");
                                        if(rot2.checked){
                                                dostavon=dostavka;
                                                }else{
                                                        dostavon=0;
                                                        }
                                        console.log(dostavon);
                                }
function f8p22(){
                                        var lift=0;
                                        var rot3=document.getElementById("ch15");
                                        if(rot3.checked){
                                                lift=prompt("Укажите количество этажей");
                                                if(isNaN(lift)){alert("Указано не число");rot3.checked=false;lift=0;}else{
                                                document.getElementById("wlift").innerHTML=poddy+"("+kolvoetazhey+" "+lift+")";
                                                liflif[0]=lift;
                                                lift=lift*etazh;
                                                liflif[1]=lift;
                                                }
                                                }else{
                                                        lift=0;
                                                        document.getElementById("wlift").innerHTML=poddy;
                                                        liflif[0]=0;
                                                        liflif[1]=0;
                                                        }
                                        console.log(lift);
                                        lift1=lift;
                                }
function f8p23(){
                                bars=0;
                                var q1=document.getElementById("size101").value;
                                var q2=document.getElementById("size102").value;
                                bars=parseInt(q2)*parseInt(q1);
                                barplosh1=bars;
                                bars=(n1/1000000)*bars;
                                console.log((n1/1000000)*bars);
                                }       
function f8p24(){
                                bartorts=0;
                                var q1=document.getElementById("select1000").value;
                                var q2=document.getElementById("size101").value;
                                var q3=document.getElementById("size102").value;
                                var bb=(parseInt(q2)+parseInt(q3))*2;
                                if(parseInt(q1)===0){bartorts=0}
                                        if(parseInt(q1)===2){bartorts=bartorts+4;}
                                console.log(bartorts);
                                bartorts=bb;
                                }
function f8p25(){
                                var ugol=document.getElementById("barrad").value;
                                        barradius=parseInt(ugol);
                                        if(barradius<0 || barradius>100){
                                        document.getElementById("barrad").value="0";
                                        }
                                        else{
                                        radbar=barradius;
                                        barradius=barradius*radiusi;
                                        console.log(barradius);
                                        }
                                }
function f8p26(){
                                ost=0;
                                var q1=document.getElementById("size103").value;
                                var q2=document.getElementById("size104").value;
                                ost=parseInt(q2)*parseInt(q1);
                                ostplosh=ost;
                                ost=(n1/1000000)*ost;
                                console.log((n1/1000000)*ost);
                                }
                                
function f8p27(){
                                osttorts=0;
                                var q1=document.getElementById("select1001").value;
                                var q2=document.getElementById("size103").value;
                                var q3=document.getElementById("size104").value;
                                var cc=(parseInt(q2)+parseInt(q3))*2;
                                        if(parseInt(q1)===0){osttorts=0}
                                        if(parseInt(q1)===2){osttorts=osttorts+1;}
                                console.log(osttorts);
                                osttorts=cc;
                                }
function f8p28(){
                                var ugol=document.getElementById("ostrad").value;
                                        ostradius=parseInt(ugol);
                                        if(ostradius<0 || ostradius>100){
                                        document.getElementById("ostrad").value="0";
                                        }
                                        else{
                                        radost=ostradius;
                                        ostradius=ostradius*2500;
                                        console.log(ostradius);
                                        }
                                }
                
function test(){
                        var bvis=parseFloat(document.getElementById("bortvisotka").value);
						if(bvis<100){bvis=100;}
						var ostrovPloshad=parseFloat(document.getElementById("size103").value)*parseFloat(document.getElementById("size103").value);
						var tsenaKROMKAOSTROV=(((parseFloat(document.getElementById("size103").value)+parseFloat(document.getElementById("size103").value))*2)*n5)/1000;
                        var TSENAostrov=(n1/1000000)*ostrovPloshad;
						TSENAostrov=TSENAostrov+tsenaKROMKAOSTROV;
                        var kromka= (tortspogon/1000)*n5;
                        var stenka=((parseFloat(document.getElementById("stena1").value)*parseFloat(document.getElementById("stena2").value))/1000000)*n1;
                        var bortan=(bortpogon*parseFloat(bvis))/1000000;
                        var kolvoMoika=0;
                        if (virezmoika>0){kolvoMoika=1;}else{kolvoMoika=0;}
                        var kolvoPlita=0;
                        if (virezplita>0){kolvoPlita=1;}else{kolvoPlita=0;}
                        var kolvoProtochka=0;
                        if (protik>0){kolvoProtochka=1;}else{kolvoProtochka=0;}
                        var kolvoKranchik=0;
                        if (kranchik>0){kolvoKranchik=1;}else{kolvoKranchik=0;}
                        var kolvoZummy=0;
                        if (zammy>0){kolvoZummy=1;}else{kolvoZummy=0;}
                        var kolvoD=0;
                        if (dostavon>0){kolvoD=1;}else{kolvoD=0;}
                        var toto=n2+n61+(TSENAostrov+tsenaKROMKAOSTROV)+kromka+(bortan*n1)+protik+virezmoika+kranchik+virezplita+zammy+dostavon+liflif[1];
        document.getElementById("fin").innerHTML="<table border='2' bordercolor='black' cellpadding='4'><tr align='center'><td colspan='4'><strong>"+itog1+"<\/strong><\/td><\/tr><tr><td>"+itog2+"<\/td><td colspan='3'>"+mat+"<\/td><\/tr><tr><td><\/td><td>"+itog4+"<\/td><td>"+itog5+"<\/td><td>"+itog6+"<\/td><\/tr><tr><td>"+itog7+"<\/td><td>"+n1+"<\/td><td>"+(plosh1/1000000)+"<\/td><td>"+n2.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"<\/td><\/tr><tr><td>"+itog8+"<td>"+n61+"<\/td><td>"+stenplosh+"<\/td><td>"+n61.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"<\/td><\/tr><tr><td>"+itog9+" <\/td><td>"+n1+"<\/td><td>"+(ostrovPloshad/1000000)+"<\/td><td>"+TSENAostrov.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"<\/td><\/tr><tr><td>"+itog10+"<\/td><td>"+n5+"<\/td><td>"+((tortspogon)/1000)+"<\/td><td>"+kromka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"<\/td><\/tr><tr><td>"+itog11+"<\/td><td>"+n1+"<\/td><td>"+(bortan)+"<\/td><td>"+(bortan*n1).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"<\/td><\/tr><tr><td>"+itog12+"<\/td><td>1200<\/td><td>"+kolvoProtochka+"<\/td><td>"+protik.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"<\/td><\/tr><tr><td>"+itog13+"<\/td><td>"+virezmoika+"<\/td><td>"+kolvoMoika+"<\/td><td>"+virezmoika.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"<\/td><\/tr><tr><td>"+itog14+"<\/td><td>"+kranchik+"<\/td><td>"+kolvoKranchik+"<\/td><td>"+kranchik.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"<\/td><\/tr><tr><td>"+itog15+"<\/td><td>"+virezplita+"<\/td><td>"+kolvoPlita+"<\/td><td>"+virezplita.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"<\/td><\/tr><tr><td>"+itog16+"<\/td><td>2000<\/td><td>"+kolvoZummy+"<\/td><td>"+zammy.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"<\/td><\/tr><tr><td>"+itog17+"<\/td><td>3000<\/td><td>"+kolvoD+"<\/td><td>"+dostavon.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"<\/td><\/tr><tr><td>"+itog18+"<\/td><td>1500<\/td><td>"+liflif[0]+"<\/td><td>"+liflif[1].toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"<\/td><\/tr><tr><td colspan='3' align='right'><strong>"+itog19+"<\/strong><\/td><td>"+toto.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"<\/td><\/tr><\/table>"
        
        
        }       

function tilt(){

}
function clear1(){
                        var ma = document.getElementsByTagName("input");
                        for (i=0;i<ma.length;i++){ma[i].value=0;}
        n2=0;
        bortpogon=0;
        tortspogon=0;
        civ=0;
        n7=0;
        bartorts=0;
        barradius=0;
        ost=0;
        osttorts=0;
        ostradius=0;
        ss=0;
        n61=0;
        ww=0;
        zamer1=0;
        dostavka1=0;
        lift1=0;
        samara=0;
        sumsum=0;
        samara=0;
        plosh1=0;
}
function prints(strid){
  var prtContent = document.getElementById(strid);
  var WinPrint = window.open('','','left=50,top=50,width=800,height=640,toolbar=0,scrollbars=1,status=0');
  WinPrint.document.write('<div id="print" class="contentpane">');
  WinPrint.document.write(prtContent.innerHTML);
  WinPrint.document.write('</div>');
  WinPrint.document.close();
  WinPrint.focus();
  WinPrint.print();
  WinPrint.close();

}
// ]]>
</script>