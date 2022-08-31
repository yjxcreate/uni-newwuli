<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>实验三  霍尔效应测量磁感应强度</title>
    <!-- <link rel="stylesheet" href="../assets/css/xiangShi.css"> -->
    <style>
        /* 全局样式表 */
html,
body {
    height: 100%;
    margin: 0;
    padding: 0;
}

/* 校徽 */
.schoolBadge {
    background-image: url(https://i.postimg.cc/rwzRt8v9/l-QLPJxad-Pq83-Z3clz-KCw-AD2-s-Bo-FD1w-DAr-JAFMBUAA-160-37-png-720x720q90g.jpg);
    height: 45px;
    width: 200px;
    background-repeat: no-repeat;
    margin-top: 10px;
    margin-left: 15px;
}

/* 主体 */
.allStyle {
    width: 90%;
    text-align: center;
    margin-left: 5%;
}

/* 标题 */
.titleItem {
    font-weight: 500;
    font-size: 25px;
    display: block;
    width: 100%;
    height: 30px;
    line-height: 30px;
    text-align: center;
    margin-left: 15%;
    /* min-width: 50%; */
}

/* 总分 */
.totalPoints {
    font-weight: 400;
    width: 100%;
    text-align: center;
    font-size: 15px;
    margin: 0;
    /* min-width: 5%; */
    /* height: 30%; */
}

/* 总分分数 */
.totalNumber {
    font-weight: 400;
    text-align: right;
    font-size: 80px;
    margin: 0;
    padding-right: 30px;
    /* min-width: 10%; */
}

.infoStyle {
    /* background-color: pink; */
    padding-top: 8%;
}

h4 {
    text-align: left;
    font-weight: 500;
    color: #363739;
}

.formTable {
    background-color: #EEEEEE;
    /* height: 30%; */
    padding: 2%;
    border-radius: 3px;
    text-align: left;
}

.inputInfo {
    background-color: #EEEEEE;
    border-top-width: 0px;
    border-right-width: 0px;
    border-bottom-width: 2px;
    border-left-width: 0px;
    width: 10%;
    text-align: center;
}

.inputInfo:focus {
    outline: none;
}

textarea {
    background-color: #EEEEEE;
    border-top-width: 0px;
    border-right-width: 0px;
    border-bottom-width: 0px;
    border-left-width: 0px;
    width: 100%;
}

textarea:focus {
    outline: none;
}

.formTable .pictureOne {
    background-image: url(https://picgo-photos.oss-cn-hangzhou.aliyuncs.com/img/one.png);
    background-repeat: no-repeat;
    height: 300px;
    width: 100%;
    background-position: center center;
    text-align: center;
    margin: 0;
}

p {
    text-indent: 2em;
}

.formTable .pictureTwo {
    background-image: url(https://picgo-photos.oss-cn-hangzhou.aliyuncs.com/img/two.png);
    background-repeat: no-repeat;
    height: 30px;
    width: 100%;
    background-position: center center;
    text-align: center;
    margin: 0;
}

.formTable .pictureThree {
    background-image: url(https://picgo-photos.oss-cn-hangzhou.aliyuncs.com/img/three.png);
    background-repeat: no-repeat;
    height: 40px;
    width: 100%;
    background-position: center center;
    text-align: center;
    margin: 0;
}

.formTable .pictureFour {
    background-image: url(https://i.postimg.cc/q76tFzrV/4.png);
    background-repeat: no-repeat;
    width: 100%;
    height: 45px;
    background-position: center center;
    text-align: center;
    margin: 0;
}

.formTable .pictureFive {
    background-image: url(https://i.postimg.cc/4yQsMTnT/5.png);
    background-repeat: no-repeat;
    width: 100%;
    height: 45px;
    background-position: center center;
    text-align: center;
    margin: 0;
}

.formTable .pictureSix {
    background-image: url(https://i.postimg.cc/ZKmQHM34/6.png);
    background-repeat: no-repeat;
    width: 90px;
    height: 45px;
    background-position: center center;
    margin-left: 30%;
    background-size: 100% 100%;
    float: left;
}

.formTable .pictureSeven {
    background-image: url(https://i.postimg.cc/G2kQsbXY/7.png);
    background-repeat: no-repeat;
    width: 200px;
    height: 45px;
    background-position: center center;
    margin-left: 50%;
    background-size: 100% 100%;
}

.pictureEight {
    background-image: url(https://i.niupic.com/images/2022/08/23/a2fo.png);
    background-repeat: no-repeat;
    background-position: center center;
    text-align: center;
    /* width: 1004px;
    height: 741px; */
    width: 100%;
    height: 741px;
    /* background-size:100% 100%; */
    /* margin: 0; */
    /* background-size: 1004px 741px; */
    background-size: 95% 95%;
}

.pictureNight {
    background-image: url(https://i.niupic.com/images/2022/08/23/a2fp.png);
    background-repeat: no-repeat;
    background-position: center center;
    text-align: center;
    /* width: 1004px;
    height: 741px; */
    width: 100%;
    height: 741px;
    /* background-size:100% 100%; */
    /* margin: 0; */
    /* background-size: 1004px 741px; */
    background-size: 95% 95%;
}

.pictureTen {
    background-image: url(https://i.niupic.com/images/2022/08/23/a2fq.png);
    background-repeat: no-repeat;
    background-position: center center;
    text-align: center;
    /* width: 1004px;
    height: 741px; */
    width: 100%;
    height: 741px;
    /* background-size:100% 100%; */
    /* margin: 0; */
    /* background-size: 1004px 741px; */
    background-size: 95% 95%;
}

table {
    border-collapse: collapse;
    border: 1px #525152 solid;
    width: 90%;
    margin: 0 auto;
}

th,
td {
    border: 1px #525152 solid;
    text-align: center;
    font-size: 17px;
    line-height: 30px;
}

/*模拟对角线*/
.out {
    border-top: 55px #D6D3D6 solid;
    /*上边框宽度等于表格第一行行高*/
    width: 0px;
    /*让容器宽度为0*/
    height: 0px;
    /*让容器高度为0*/
    border-left: 200px #BDBABD solid;
    /*左边框宽度等于表格第一行第一格宽度*/
    position: relative;
    /*让里面的两个子容器绝对定位*/
}
/* 测量次数 */
b {
    font-style: normal;
    display: block;
    position: absolute;
    top: -50px;
    left: -90px;
    width: 100px;
}
/* 测量内容 */
em {
    font-style: normal;
    display: block;
    position: absolute;
    top: -30px;
    left: -200px;
    width: 100px;
}
/* 超链接 */
a {
    text-decoration: none;
}
    </style>
</head>
<body>
    <!-- 校徽 -->
    <div class="schoolBadge"></div>
    <div class="allStyle">
        <!-- 标题 + 总分 -->
            <div style="width: 75%;float: left;white-space:nowrap;">
                <h1 class="titleItem">实验三  霍尔效应测量磁感应强度</h1>
            </div>
            <div style="width: 25%;float: right;white-space:nowrap;">
                <h5 class="totalPoints">总分：</h5>
                <h1 class="totalNumber">95</h1>
            </div>
        <!-- 主体 -->
        <div class="infoStyle">
            <!-- 一：基本信息 -->
            <div>
                <h4>一：基本信息</h4>
                <div class="formTable">
                    <!-- 第一行 -->
                    <div style="margin-bottom: 3%;">
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            学生姓名
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            学生层次
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            学生专业
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            学生年级
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                    </div>
                    <!-- 第二行 -->
                    <div>
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            学生班级
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            学生学号
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            任课教师
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                        <div style="display: inline;width: 20%;margin: 4%;white-space:nowrap;">
                            完成日期
                            <input class="inputInfo" type="text" name="name" size="12" >
                        </div>
                    </div>
                </div>
            </div>
            <!-- 二：实验目的 -->
            <div>
                <h4>二：实验目的</h4>
                <div class="formTable">
                    <div>
                        <!-- <textarea rows="10"></textarea> -->
                        1.掌握使用霍尔效应测量磁感应强度的实验原理;
                    </div>
                    <div>
                        2.掌握使用“对称交换法”消除负效应影响的方法。
                    </div>
                </div>
            </div>
            <!-- 三：实验仪器 -->
            <div>
                <h4>三：实验仪器</h4>
                <div class="formTable">
                    <div>
                        <!-- <textarea rows="10"></textarea> -->
                        1. QS-H霍尔效应实验仪（包括电磁铁，霍尔样品和样品架，换向开关和接线柱）
                    </div>
                    <div>
                        2.测试仪（由励磁恒流源，样品工作恒流源，数字电流表，数字毫伏表等组成）
                    </div>
                </div>
            </div>
            <!-- 四：实验原理 -->
            <div>
                <h4>四：实验原理</h4>
                <div class="formTable">
                    <div>
                        <!-- <textarea rows="10"></textarea> -->
                        <div class="pictureOne"></div>
                        <p>
                            由霍尔效应原理可知，在垂直于磁场（z轴）和工作电流（y轴）的方向（x轴），将产生一个纵向电位差，其大小为： 
                        </p>
                        <div class="pictureTwo"></div>
                        <p>
                            固有：
                        </p>
                        <div class="pictureThree"></div>
                        <p>
                            式中，为霍尔元件灵敏度。当霍尔元件灵敏度已知时，可根据不同点位工作电流与霍尔电压的对应关系，得到磁场强度的分布曲线。
                        </p>
                        <p>
                            2.霍尔元件的副效应及其消除方法:
                        </p>
                        <p>
                            在实际测量过程中，会伴随一些热磁副效应，这些热磁效应有：由于霍尔片两端的温度差形成的电动势；热流通过霍尔片在其端产生的电动势；热流通过霍尔片时两侧会有温度差产生，从而产生的温差电动势；除此之外，还有由于电极不在同一等势面上引起的不等位电势差。
                        </p>
                        <p>
                            为了消除副效应，在操作时我们需要分别改变和的方向，记录4组电势差的数据，得到霍尔电压平均值，这样虽然不能消除所有的副效应，但其引入的误差不大，可以忽略不计。
                        </p>
                    </div>
                </div>
            </div>
            <!-- 五：实验内容及实验数据记录与处理 -->
            <div>
                <h4 style="margin-bottom: 0%;">五：实验内容及实验数据记录与处理</h4>
                <div style="text-align: right;margin-bottom: 1%;color: #606166;font-size: 12px;">
                    该部分得分：45分
                </div>
                <div class="formTable">
                    <div>
                        <!-- <textarea rows="10"></textarea> -->
                        <p>
                            1）设备电路连接
                        </p>
                        <p>
                            将霍尔效应测试仪上对应输出、输出和输入接线柱分别与实验仪上输入，输入和输出三对接线柱连接，调整二维移动尺，使x轴方向上与0刻度线对齐。
                        </p>
                        <p>
                            2） 打开测试仪电源开关，输出调零，闭合工作电流开关，通入工作电流5毫安，待至少5分钟开始实验。
                        </p>
                        <p>
                            3）打开,开关，调整=5.00mA,Im=300mA。移动y轴，找到输出最大点。
                        </p>
                        <p>
                            4）保持y轴不变，按要求刻度移动x轴，改变,开关方向，测量四组数据并记录数据。
                        </p>
                        <p>
                            5）计算对应电位磁感应强度，并绘制-X曲线。
                        </p>
                        <p>
                            6）实验完毕后，将工作电流和励磁电流调到0A，断开电源和连线，恢复原样。
                        </p>
                        <p>
                            注意：
                        </p>
                        <p>
                            1.由于励磁电流较大，所以千万不能将,接错，否则励磁电流将烧坏霍尔元件。
                        </p>
                        <p>
                            2.霍尔元件及二维移动尺容易折断、变形，应注意避免受挤压、碰撞等。实验前应检查两者及电磁铁是否松动、移位，并加以调整。
                        </p>
                        <p>
                            3.为了提高霍尔元件测量的准确性，实验前霍尔元件应至少预热5分钟，具体操作如下：断开励磁电流开关，闭合工作电流开关，通入工作电流5毫安，待至少5分钟开始实验。
                        </p>
                        <p>
                            4.为了不使电磁铁因过热而受到损坏或影响测量精度，除在短时间内读取有关数据，通以励磁电流外，其余时间最好断开励磁电流开关。
                        </p>
                        <p>
                            5.2 实验数据记录与处理
                        </p>
                        <div>
                            <!-- 1.箱式直流电桥测量电阻值 -->
                            <p>
                                实验中给定：KB = 0.173mV/(mA·mT)
                            </p>
                            <p>
                                实验仪器编号：(&nbsp;&nbsp;)；线圈常数= (&nbsp;&nbsp;)mT / A      
                            </p>
                            <p style="text-align: center;">
                                表1.电磁铁气隙中磁感应强度的分布（=300MA, =5.00MA）
                            </p>
                            <table>
                                <tr>
                                    <th style="width: 100px;" rowspan="2">
                                       X / mm
                                    </th>
                                    <th>V1 / mV</th>
                                    <th>V2 / mV</th>
                                    <th>V3 / mV</th>
                                    <th>V4 / mV</th>
                                    <th colspan="2" rowspan="2" >VH = 1/4(|V1|+|V2|+|V3|+|V4|)</th>
                                    <th rowspan="2">B / mT</th>
                                </tr>
                                <tr>
                                    <td>+IM / +Is</td>
                                    <td>+IM / -Is</td>
                                    <td>-IM / +Is</td>
                                    <td>-IM / -Is</td>
                                </tr>
                                <tr>
                                    <td class="t1">0</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                    <td class="t1">2</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                    <td class="t1">4</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                    <td class="t1">6</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                    <td class="t1">8</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                    <td class="t1">10</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                    <td class="t1">12</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                    <td class="t1">15</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                    <td class="t1">20</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                    <td class="t1">25</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                    <td class="t1">30</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                    <td class="t1">35</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                    <td class="t1">40</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                    <td class="t1">45</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                    <td class="t1">48</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                                <tr>
                                    <td class="t1">50</td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                    <td contenteditable="true"></td>
                                </tr>
                            </table>
                            <p style="text-align: center;">
                                根据上表所记录数据，做出电磁铁气隙中磁感应强度X - B曲线：
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 六：思考题 -->
            <div>
                <h4 style="margin-bottom: 0%;">六：思考题</h4>
                <div style="text-align: right;margin-bottom: 1%;color: #606166;font-size: 12px;">
                    该部分得分：50分
                </div>
                <div class="formTable">
                    <div>
                        Ⅰ.选择题(选择题部分：40分)
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">1.在使用箱式直流电桥测量电阻时，为什么选取的比例臂一般应使单电桥的四个测量盘尽可能用上(&nbsp;&nbsp;&nbsp;&nbsp;)？</div>
                            <div style="text-indent: 2em;margin: 5px auto;">A.Bcosa</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.Bsina</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.Btana</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.Bcota</div>
                        </div>
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">2.若磁感应强度B与工作电流方向存在角度β时，作用在元件上的有效磁场大小为：(&nbsp;&nbsp;&nbsp;&nbsp;)？</div>
                            <div style="text-indent: 2em;margin: 5px auto;">A.Bsinβ</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.Bcosβ</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.Btanβ</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.Bcotβ</div>
                        </div>
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">3.测量不等位电势差时，若不等位电势差不为0，则增大工作电流时，不等位电势差将(&nbsp;&nbsp;&nbsp;&nbsp;)？</div>
                            <div style="text-indent: 2em;margin: 5px auto;">A.增大</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.减小</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.不变</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.不确定</div>
                        </div>
                        <div style="text-indent: 1em;margin:1%;">
                            <div style="margin-bottom: 10px;">4.若磁感应强度B与元件平面法线存在角度α，与工作电流方向存在角度β时，作用在元件上的有效磁场大小为：(&nbsp;&nbsp;&nbsp;&nbsp;)？</div>
                            <div style="text-indent: 2em;margin: 5px auto;">A.Bcosasinβ</div>
                            <div style="text-indent: 2em;margin: 5px auto;">B.Bcosacosβ</div>
                            <div style="text-indent: 2em;margin: 5px auto;">C.Bsinasinβ</div>
                            <div style="text-indent: 2em;margin: 5px auto;">D.Bsinacosβ</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 七：线上资源 -->
            <div>
                <h4>七：线上资源</h4>
                <div class="formTable">
                    <div style="text-indent: 1em;margin:1%;">
                        <div style="margin-bottom: 10px;">1）在线实验报告系统链接：<a href="http://180.76.111.200/#/login">http://180.76.111.200/#/login</a></div>
                        <div style="margin-bottom: 10px;">2）在线资源链接：FTP://ftp.cs.nsu.edu.cn/大学物理实验</div>
                        <div>
                            3）ttps://www.renrendoc.com/paper/88259084.html
                        </div>
                    </div>
            </div>
            </div>
            <br />
        </div>
    </div>
</body>
</html>