<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>
<div class="page-heading"> <h2>商城关闭设置</h2> </div>
<form action="" method="post" class="form-horizontal form-validate" enctype="multipart/form-data" >

    <div class="form-group">
        <label class="col-sm-2 control-label">商城状态</label>
        <div class="col-sm-9 col-xs-12">
            <?php if(cv('sysset.close.edit')) { ?>
            <label class="radio-inline">
                <input type="radio" name="data[flag]" value='0' <?php  if($data['flag']==0) { ?>checked<?php  } ?> /> 开启
            </label>
            <label class="radio-inline">
                <input type="radio" name="data[flag]" value='1' <?php  if($data['flag']==1) { ?>checked<?php  } ?> /> 关闭
            </label>

            <?php  } else { ?>

            <div class='form-control-static'><?php  if($data['flag']==1) { ?>关闭<?php  } else { ?>开启<?php  } ?></div>
            <?php  } ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">商城关闭跳转链接</label>
        <div class="col-sm-9 col-xs-12">
            <?php if(cv('sysset.close.edit')) { ?>
            <input type="text" name="data[url]" class="form-control" value="<?php  echo $data['url'];?>" />
            <span class='help-block'>如果您不采用系统页面，则可以设置关闭提醒链接，当商城关闭时跳转到此链接（非任何商城的链接）</span>
            <?php  } else { ?>
            <div class='form-control-static'><?php  echo $data['url'];?></div>
            <?php  } ?>

        </div>
    </div>			
    <div class="form-group">
        <label class="col-sm-2 control-label">商城关闭提醒</label>
        <div class="col-sm-9 col-xs-12">
            <?php if(cv('sysset.close.edit')) { ?>
            <?php  echo tpl_ueditor('data[detail]',$data['detail'])?>
            <?php  } else { ?>
            <textarea id='detail' style='display:none'><?php  echo $data['detail'];?></textarea>
            <a href='javascript:preview_html("#detail")' class="btn btn-default">查看内容</a>
            <?php  } ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-9 col-xs-12">
            <?php if(cv('sysset.close.edit')) { ?>
            <input type="submit" value="提交" class="btn btn-primary"  />
            <?php  } ?>
        </div>
    </div>


</form>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>     