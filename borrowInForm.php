<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- customize css -->
  <link href="css/zuzu.css" rel="stylesheet">
  <!-- Bootstrap -->
  <title>租租侠</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--  <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
  <script src="js/jquery.min.js"></script>
  <!--  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>-->
  <script src="js/bootstrap.min.js"></script>
  <!--  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
</head>
<body style="background-color: #eeeeee;">
<main class="container-fluid">
  <div class="row">
    <!--      transaction 1-->
    <a href="item.php" id="item-overview">
      <div class="col-xs-12 transaction-box">
        <div class="transaction">
          <img src="img/Pikachu.jpg" style="height: 96px; width: 96px; float: left;"
               alt="item-1-main-photo" class="img-responsive img-rounded">
          <div class="row" style="padding: 0 10px; height: 100%; float: left; width: calc(100% - 76px);">
            <div class="col-xs-12" style="height: 33%; font-weight: bold; font-size: 22px;">物品名称</div>
            <div class="col-xs-12" style="height: 33%; color: #1A98D5; margin-top: 8px;">￥12&nbsp;元&nbsp;/&nbsp;天</div>
            <div class="col-xs-12" style="height: 33%; color: #cccccc; margin-top: 2px; padding-right: 0; font-size: 12px;">
              押金：50
              <span style="float: right;">出租者：test user</span>
            </div>
          </div>
        </div>
      </div>
    </a>

    <div class="col-xs-12 card-box">
      <div class="col-xs-12 card" style="margin-bottom: 10px;">
        <!--表单-->
        <div id="form-div" style="padding: 10px 10px 0; display: block;">
          <h3 style="text-align: center; color: #1A98D5; margin: 10px;">填写借入信息</h3>
          <form id="borrowInForm" role="form" method="post" action="#" enctype="multipart/form-data">
            <!-- 物品信息 -->
            <!-- 可租借时间 -->
            <div class="form-group">
              <label>可租借时间&nbsp;*</label>
              <input type="date" class="form-control" placeholder="出租时间" required style="margin-bottom: 1rem">
              <input type="date" class="form-control" placeholder="归还时间" required>
            </div>
            <!-- 备注 -->
            <div class="form-group">
              <label for="remark">备注</label>
              <textarea id="remark" class="form-control" rows="3"></textarea>
            </div>
            <hr>
            <!-- 用户信息 -->
            <div>
              <p class="help-block" style="color: #aaa">为了您的隐私，以下内容将由租租侠平台妥善存档，
                当且仅当审核并备份存档租借着的身份信息后，才会将您的联系方式告知租借者。</p>
              <div class="form-group">
                <label>姓名&nbsp;*</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label>学院&nbsp;*</label>
                <select class="form-control" required>
                  <option>师范学院</option>
                  <option>人文学院</option>
                  <option>外国语学院</option>
                  <option>传播学院</option>
                  <option>经济学院</option>
                  <option>管理学院</option>
                  <option>法学院</option>
                  <option>艺术设计学院</option>
                  <option>数学与统计学院</option>
                  <option>物理与能源学院</option>
                  <option>化学与环境工程学院学院</option>
                  <option>材料学院</option>
                  <option>信息工程学院</option>
                  <option>计算机与软件学院</option>
                  <option>建筑与城市规划学院</option>
                  <option>土木工程学院</option>
                  <option>机电与控制工程学院</option>
                  <option>电子科学技术学院</option>
                  <option>生命与海洋科学学院</option>
                  <option>光电工程学院</option>
                  <option>高尔夫学院</option>
                  <option>高等研究院</option>
                </select>
              </div>
              <div class="form-group">
                <label>学号&nbsp;*</label>
                <input type="number" class="form-control" required pattern="[0~9]{10}">
              </div>
              <div class="form-group">
                <label>手机*</label>
                <input type="number" class="form-control" required pattern="[0~9]{10}" maxlength="11">
              </div>
              <div class="form-group">
                <label>微信号*</label>
                <input type="number" class="form-control" required >
                <p class="help-block" style="color: #aaa">收集您的微信号是为了租租侠能与您更方便的沟通交流噢~</p>
              </div>
            </div>
            <hr>
            <div class="checkbox">
              <label>
                <input type="checkbox" required><span id="show-policies">我已阅读免责条款与用户守则</span>
              </label>
            </div>
          </form>
        </div>
        <!-- 免责条款 -->
        <div class="" id="policies-div" style="padding: 10px 10px 0; display: none;">
          <h4 style="font-size: 2.5rem;text-align: center;width: 100%">租租侠平台免责声明</h4><br>
          <p class="lead" style="line-height: 1.6;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;欢迎您光临租租侠平台（以下称"本平台"）。在您使用本平台各项服务之前，请仔细阅读本《免责声明》。
            本平台为深圳大学Enactus团队租租侠运营的租赁平台，域名为mr_rent.com以及深圳大学Enactus团队启用的其他域名。
            若本协议内任何一则条款由于国家或地方政策变更而不再具有约束力，该条款的失效不对协议内其他条款的继续履行造成任何影响。
            凡以任何方式登陆浏览本平台内容或直接、间接使用本平台内容者，视为同意本平台《免责声明》。
          </p>
          <hr>
          <!-- 免责条款详情 -->
          <div>
            <p>1、使用租租侠平台服务前，您承诺接受并遵守本协议的约定。如您不同意本协议的约定，您应立即停止注册程序或停止使用租租侠平台服务。
              无论您事实上是否在使用租租侠平台服务之前认真阅读了本协议内容，只要您使用“租租侠平台服务，即视为您与租租侠平台缔结本协议，
              本协议即对您产生约束，届时您不应以未阅读本协议的内容或者未获得租租侠平台对您问询的解答等理由，主张本协议无效，或要求撤销本协议。</p>
            <p>2、用户明确同意其使用租租侠的网络服务，包括但不限于租租侠网，所存在的风险将完全由其本人承担；
              因其使用租租侠网络服务而产生的一切后果也由其本人承担。租租侠对用户及任何第三方不承担任何责任。</p>
            <p>3、租租侠不担保或保证网络服务一定能满足用户的要求，也不担保网络服务不会中断，对网络服务的及时性、安全性、准确性也都不作任何担保或保证。
              用户须独立承担前述风险。租租侠对于用户使用租租侠网络服务或无法使用租租侠网络服务所导致的计算机软、
              硬件的损害或发生资料的流失等任何直接、间接、附带、特别、衍生的损害不承担任何责任。</p>
            <p>4、租租侠不保证为向用户提供便利而设置的外部链接的准确性和完整性，同时，
              对于该等外部链接指向的不由租租侠实际控制的任何网页上的内容，租租侠也不承担任何责任。 </p>
            <p>5、对于因不可抗力或租租侠不能控制的原因造成的网络服务中断或其它缺陷，租租侠不承担任何责任，
              但将尽力减少因此而给用户造成的损失和影响。 </p>
            <p>6、租租侠对于任何自本网站而获得的他人的信息、内容或者广告宣传等任何资讯（以下统称“信息”），
              不保证真实、准确和完整性。如果任何单位或者个人通过上述“信息”而进行任何行为，须自行甄别真伪和谨慎预防风险。
              否则，无论何种原因，租租侠不对任何非与本网站直接发生的交易和/或行为承担任何直接、间接、附带或衍生的损失和责任。  </p>
            <p>7、用户同意，对于租租侠向用户提供的下列产品或者服务的质量缺陷本身及其引发的任何损失，租租侠无需承担任何责任：</p>
            <p>7.1 租租侠向用户免费提供的各项网络服务； </p>
            <p>7.2 租租侠向用户赠送的任何产品或者服务； </p>
            <p>7.3 租租侠向收费网络服务用户附赠的各种产品或者服务； </p>
            <p>7.4 用户资料遭到未授权的使用或修改； </p>
            <p>7.5 其他与租租侠网站相关的事宜。 </p>
            <p>8、租租侠网站平台是为租赁商和租户提供匹配服务的第三方平台，我们对租赁商进行资质审核，
              但不保证租赁商线上产品内容的与线下产品完全一致，租户与租赁商线下交易发生任何损失，
              租租侠网络平台无需负责。租租侠可协调租赁商和租户之间纠纷，提供法律咨询服务，监督租赁商租后服务质量。</p>
            <p>9、本平台内容受到著作权法、商标法、专利法、信息网络传播权保护条例等相关法律法规的保护和约束，
              除非获得权利人的授权，用户不得转载、修改、传播、制作衍生作品或者商业使用。用户或其他媒体、
              企业、网站、其他组织或个人对本平台内容如需使用，必须先与作者、相关权利人或本平台联系。</p>
            <p>10、用户应妥善保管账户及密码信息，如用户将密码告知他人或与他人共享同一ID，从而导致任何资料泄露、
              积分丢失等任何损失，由用户自行承担。</p>
            <p>11、用户了解并同意，本服务仅依其当前所呈现的状况提供，对于任何用户通讯或个人化设定之失效、删除、
              传递错误、未予储存或其他任何问题，租租侠平台均不承担任何责任。租租侠平台保留不经事先通知为维修保养、
              升级或其他目的暂停本服务任何部分的权利。</p>
            <p>12、租赁物品时，若转借给第三方，造成的一切后果，平台一律不承担。</p>
            <p>13、本平台有权在任何时候，修改或暂停、终止本平台全部或部分服务，对此用户可以理解和接受。</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

<header class="col-xs-12" style="position:fixed;">
  <div class="row">
    <a href="item.php">
      <div class="col-xs-3" style="padding-left: 25px; padding-top: 20px;">
        <span class="glyphicon glyphicon-menu-left" aria-hidden="true" style="font-size: 20px; color: #1A98D5;"></span>
      </div>
    </a>
    <div class="col-xs-6" style="padding-top: 13px;">
      <h2 style="text-align: center; margin: 0; color: #1A98D5;">租租侠</h2>
    </div>
    <div class="col-xs-3" style="padding-top: 12px;"></div>
  </div>
</header>

<footer class="col-xs-12" style="position:fixed;">
  <div class="row" style="text-align: center; color: #aaaaaa; padding-top: 14px">
    <div class="col-xs-12" id="submit-button" style="color: #1A98D5; display: block;">
      <button form="borrowInForm" type="submit" style="width: 100%; border: none; background-color: #ffffff;">
        确认借入
      </button>
    </div>

    <div class="col-xs-12" id="return-button" style="color: #1A98D5; display: none;">
      <p id="hide-policies" style="width: 100%; border: none; background-color: #ffffff;">
        <span>返回</span>
      </p>
    </div>
  </div>
</footer>
</body>
<script>
    $("#show-policies").click(function(){
        $('body,html').animate({scrollTop: 0}, 700);
        $("#form-div").hide();
        $("#submit-button").hide();
        $('#item-overview').hide();
        $("#policies-div").show();
        $("#return-button").show();
    });
    $("#hide-policies").click(function(){
        $('body,html').animate({scrollTop: document.body.scrollHeight}, 1000);
        $("#policies-div").hide();
        $("#return-button").hide();
        $("#form-div").show();
        $("#submit-button").show();
        $('#item-overview').show();
    });
</script>
</html>
