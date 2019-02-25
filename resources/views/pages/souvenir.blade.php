@extends('layouts.template')
@section('content')
<style type="text/css">
    .wrapcard {
  width: 290px;
  height: 400px;
  background: white;
  margin: auto;
  position: relative;
  overflow: hidden;
  border-radius: 10px 10px 10px 10px;
  box-shadow: 0;
  transform: scale(0.95);
  transition: box-shadow 0.5s, transform 0.5s;
}
.wrapcard:hover {
  transform: scale(1);
  box-shadow: 5px 20px 30px rgba(0, 0, 0, 0.2);
}
.wrapcard .containcard {
  width: 100%;
  height: 100%;
}
.wrapcard .containcard .top {
  height: 80%;
  width: 100%;
  /*background: url(https://s-media-cache-ak0.pinimg.com/736x/49/80/6f/49806f3f1c7483093855ebca1b8ae2c4.jpg) no-repeat center center;*/
  -webkit-background-size: 100%;
  -moz-background-size: 100%;
  -o-background-size: 100%;
  background-size: 100%;
}
.wrapcard .containcard .bottom {
  width: 200%;
  height: 20%;
  transition: transform 0.5s;
}
.wrapcard .containcard .bottom.clicked {
  transform: translateX(-50%);
}
.wrapcard .containcard .bottom h1 {
  margin: 0;
  padding: 0;
}
.wrapcard .containcard .bottom h5 {
  margin: 0;
  padding: 0;
}
.wrapcard .containcard .bottom p {
  margin: 0;
  padding: 0;
}
.wrapcard .containcard .bottom .left {
  height: 100%;
  width: 50%;
  background: #ffffff;
  position: relative;
  float: left;
}
.wrapcard .containcard .bottom .left .details {
  padding: 20px;
  float: left;
  width: calc(70% - 10px);
}
.wrapcard .containcard .bottom .left .buybtn {
  float: right;
  width: calc(30% - 2px);
  height: 100%;
  background: #ffffff;
  transition: background 0.5s;
  border-left: solid thin rgba(0, 0, 0, 0.1);
}
.wrapcard .containcard .bottom .left .buybtn i {
  font-size: 30px;
  padding: 20px;
  color: #254053;
  transition: transform 0.5s;
}
.wrapcard .containcard .bottom .left .buybtn:hover {
  background: #A6CDDE;
}
.wrapcard .containcard .bottom .left .buybtn:hover i {
  transform: translateY(5px);
  color: #00394B;
}
.wrapcard .containcard .bottom .right {
  width: 50%;
  background: #A6CDDE;
  color: white;
  float: right;
  height: 200%;
  overflow: hidden;
}
.wrapcard .containcard .bottom .right .details {
  padding: 20px;
  float: right;
  width: calc(70% - 40px);
}
.wrapcard .containcard .bottom .right .done {
  width: calc(30% - 2px);
  float: left;
  transition: transform 0.5s;
  border-right: solid thin rgba(255, 255, 255, 0.3);
  height: 50%;
}
.wrapcard .containcard .bottom .right .done i {
  font-size: 30px;
  padding: 30px;
  color: white;
}
.wrapcard .containcard .bottom .right .remove {
  width: calc(30% - 1px);
  clear: both;
  border-right: solid thin rgba(255, 255, 255, 0.3);
  height: 65%;
  background: #BC3B59;
  transition: transform 0.5s, background 0.5s;
}
.wrapcard .containcard .bottom .right .remove:hover {
  background: #9B2847;
}
.wrapcard .containcard .bottom .right .remove:hover i {
  transform: translateY(5px);
}
.wrapcard .containcard .bottom .right .remove i {
  transition: transform 0.5s;
  font-size: 30px;
  padding: 30px;
  color: white;
}
.wrapcard .containcard .bottom .right:hover .remove, .wrapcard .containcard .bottom .right:hover .done {
  transform: translateY(-100%);
}
.wrapcard .inside {
  z-index: 9;
  background: #92879B;
  width: 140px;
  height: 140px;
  position: absolute;
  top: -70px;
  right: -70px;
  border-radius: 0px 0px 200px 200px;
  transition: all 0.5s, border-radius 2s, top 1s;
  overflow: hidden;
}
.wrapcard .inside .icon {
  position: absolute;
  right: 85px;
  top: 85px;
  color: white;
  opacity: 1;
}
.wrapcard .inside:hover {
  width: 100%;
  right: 0;
  top: 0;
  border-radius: 0;
  height: 80%;
}
.wrapcard .inside:hover .icon {
  opacity: 0;
  right: 15px;
  top: 15px;
}
.wrapcard .inside:hover .contents {
  opacity: 1;
  transform: scale(1);
  transform: translateY(0);
}
.wrapcard .inside .contents {
  padding: 5%;
  opacity: 0;
  transform: scale(0.5);
  transform: translateY(-200%);
  transition: opacity 0.2s, transform 0.8s;
}
.wrapcard .inside .contents table {
  text-align: left;
  width: 100%;
}
.wrapcard .inside .contents h1, .wrapcard .inside .contents p, .wrapcard .inside .contents table {
  color: white;
}
.wrapcard .inside .contents p {
  font-size: 13px;
}
.img-shop{
    height: 320px;
    width: 300px;
}
.modal {
   position: fixed;
   top: 20%;
   /*right: 100px;*/
   bottom: 0;
   left: 0;
   z-index: 1055;
   overflow: auto;
   overflow-y: auto;
}
</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
@include('pages.navbar-second',['active' => 'Souvenir','nav' => 'cart'])
<div class="container top-160">
	<div class="row">
     <div class="col-md-3 right-20 bottom-20">
         <div class="wrapcard">
          <div class="containcard">
            <div class="top">
                <img class="img-shop" src="/asset/img/souvenir/tempelankulkas.jpg">  
            </div>
            <div id="s1" class="bottom">
              <div class="left">
                <div class="details">
                  <h5>Magnet Kulkas Bandung</h5>
                  <p>20rb</p>
                </div>
                <div class="buybtn"><br><i class="icon-cart"></i></div>
              </div>
              <div class="right">
                <div class="done"><i class="material-icons">done</i></div>
                <div class="details">
                  <h5>Magnet Kulkas Bandung</h5>
                  <p>Added to your cart</p>
                </div>
                <div class="remove"><i class="material-icons">clear</i></div>
              </div>
            </div>
          </div>
          <div class="inside">
            <div class="icon"><i class="material-icons">info_outline</i></div>
            <div class="contents">
              <table>
                <tr>
                  <th>Width</th>
                  <th>Height</th>
                </tr>
                <tr>
                  <td>3000mm</td>
                  <td>4000mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
     </div>
     <div class="col-md-3 right-20 bottom-20">
         <div class="wrapcard">
          <div class="containcard">
            <div class="top">
                <img class="img-shop" src="/asset/img/souvenir/tempelankulkas.jpg">  
            </div>
            <div id="s2" class="bottom">
              <div class="left">
                <div class="details">
                  <h5>Magnet Kulkas Dago</h5>
                  <p>20rb</p>
                </div>
                <div class="buybtn"><br><i class="icon-cart"></i></div>
              </div>
              <div class="right">
                <div class="done"><i class="material-icons">done</i></div>
                <div class="details">
                  <h5>Magnet Kulkas Bandung</h5>
                  <p>Added to your cart</p>
                </div>
                <div class="remove"><i class="material-icons">clear</i></div>
              </div>
            </div>
          </div>
          <div class="inside">
            <div class="icon"><i class="material-icons">info_outline</i></div>
            <div class="contents">
              <table>
                <tr>
                  <th>Width</th>
                  <th>Height</th>
                </tr>
                <tr>
                  <td>3000mm</td>
                  <td>4000mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
     </div>
     <div class="col-md-3 right-20 bottom-20">
         <div class="wrapcard">
          <div class="containcard">
            <div class="top">
                <img class="img-shop" src="/asset/img/souvenir/tempelankulkas.jpg">  
            </div>
            <div id="s3" class="bottom">
              <div class="left">
                <div class="details">
                  <h5>Magnet Kulkas Bandung</h5>
                  <p>20rb</p>
                </div>
                <div class="buybtn"><br><i class="icon-cart"></i></div>
              </div>
              <div class="right">
                <div class="done"><i class="material-icons">done</i></div>
                <div class="details">
                  <h5>Magnet Kulkas Bandung</h5>
                  <p>Added to your cart</p>
                </div>
                <div class="remove"><i class="material-icons">clear</i></div>
              </div>
            </div>
          </div>
          <div class="inside">
            <div class="icon"><i class="material-icons">info_outline</i></div>
            <div class="contents">
              <table>
                <tr>
                  <th>Width</th>
                  <th>Height</th>
                </tr>
                <tr>
                  <td>3000mm</td>
                  <td>4000mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
     </div>
     <div class="col-md-3 right-20 bottom-20">
         <div class="wrapcard">
          <div class="containcard">
            <div class="top">
                <img class="img-shop" src="/asset/img/souvenir/tempelankulkas.jpg">  
            </div>
            <div id="s4" class="bottom">
              <div class="left">
                <div class="details">
                  <h5>Magnet Kulkas Bandung</h5>
                  <p>20rb</p>
                </div>
                <div class="buybtn"><br><i class="icon-cart"></i></div>
              </div>
              <div class="right">
                <div class="done"><i class="material-icons">done</i></div>
                <div class="details">
                  <h5>Magnet Kulkas Bandung</h5>
                  <p>Added to your cart</p>
                </div>
                <div class="remove"><i class="material-icons">clear</i></div>
              </div>
            </div>
          </div>
          <div class="inside">
            <div class="icon"><i class="material-icons">info_outline</i></div>
            <div class="contents">
              <table>
                <tr>
                  <th>Width</th>
                  <th>Height</th>
                </tr>
                <tr>
                  <td>3000mm</td>
                  <td>4000mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
     </div>
     <div class="col-md-3 right-20 bottom-20">
         <div class="wrapcard">
          <div class="containcard">
            <div class="top">
                <img class="img-shop" src="/asset/img/souvenir/tempelankulkas.jpg">  
            </div>
            <div id="s5" class="bottom">
              <div class="left">
                <div class="details">
                  <h5>Magnet Kulkas Bandung</h5>
                  <p>20rb</p>
                </div>
                <div class="buybtn"><br><i class="icon-cart"></i></div>
              </div>
              <div class="right">
                <div class="done"><i class="material-icons">done</i></div>
                <div class="details">
                  <h5>Magnet Kulkas Bandung</h5>
                  <p>Added to your cart</p>
                </div>
                <div class="remove"><i class="material-icons">clear</i></div>
              </div>
            </div>
          </div>
          <div class="inside">
            <div class="icon"><i class="material-icons">info_outline</i></div>
            <div class="contents">
              <table>
                <tr>
                  <th>Width</th>
                  <th>Height</th>
                </tr>
                <tr>
                  <td>3000mm</td>
                  <td>4000mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
     </div>
     <div class="col-md-3 right-20 bottom-20">
         <div class="wrapcard">
          <div class="containcard">
            <div class="top">
                <img class="img-shop" src="/asset/img/souvenir/tempelankulkas.jpg">  
            </div>
            <div id="s6" class="bottom">
              <div class="left">
                <div class="details">
                  <h5>Magnet Kulkas Bandung</h5>
                  <p>20rb</p>
                </div>
                <div class="buybtn"><br><i class="icon-cart"></i></div>
              </div>
              <div class="right">
                <div class="done"><i class="material-icons">done</i></div>
                <div class="details">
                  <h5>Magnet Kulkas Bandung</h5>
                  <p>Added to your cart</p>
                </div>
                <div class="remove"><i class="material-icons">clear</i></div>
              </div>
            </div>
          </div>
          <div class="inside">
            <div class="icon"><i class="material-icons">info_outline</i></div>
            <div class="contents">
              <table>
                <tr>
                  <th>Width</th>
                  <th>Height</th>
                </tr>
                <tr>
                  <td>3000mm</td>
                  <td>4000mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
     </div>
     <div class="col-md-3 right-20 bottom-20">
         <div class="wrapcard">
          <div class="containcard">
            <div class="top">
                <img class="img-shop" src="/asset/img/souvenir/tempelankulkas.jpg">  
            </div>
            <div id="s7" class="bottom">
              <div class="left">
                <div class="details">
                  <h5>Magnet Kulkas Bandung</h5>
                  <p>20rb</p>
                </div>
                <div class="buybtn"><br><i class="icon-cart"></i></div>
              </div>
              <div class="right">
                <div class="done"><i class="material-icons">done</i></div>
                <div class="details">
                  <h5>Magnet Kulkas Bandung</h5>
                  <p>Added to your cart</p>
                </div>
                <div class="remove"><i class="material-icons">clear</i></div>
              </div>
            </div>
          </div>
          <div class="inside">
            <div class="icon"><i class="material-icons">info_outline</i></div>
            <div class="contents">
              <table>
                <tr>
                  <th>Width</th>
                  <th>Height</th>
                </tr>
                <tr>
                  <td>3000mm</td>
                  <td>4000mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
     </div>
     <div class="col-md-3 right-20 bottom-20">
         <div class="wrapcard">
          <div class="containcard">
            <div class="top">
                <img class="img-shop" src="/asset/img/souvenir/tempelankulkas.jpg">  
            </div>
            <div id="s8" class="bottom">
              <div class="left">
                <div class="details">
                  <h5>Magnet Kulkas Bandung</h5>
                  <p>20rb</p>
                </div>
                <div class="buybtn"><br><i class="icon-cart"></i></div>
              </div>
              <div class="right">
                <div class="done"><i class="material-icons">done</i></div>
                <div class="details">
                  <h5>Magnet Kulkas Bandung</h5>
                  <p>Added to your cart</p>
                </div>
                <div class="remove"><i class="material-icons">clear</i></div>
              </div>
            </div>
          </div>
          <div class="inside">
            <div class="icon"><i class="material-icons">info_outline</i></div>
            <div class="contents">
              <table>
                <tr>
                  <th>Width</th>
                  <th>Height</th>
                </tr>
                <tr>
                  <td>3000mm</td>
                  <td>4000mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
                <tr>
                  <th>Something</th>
                  <th>Something</th>
                </tr>
                <tr>
                  <td>200mm</td>
                  <td>200mm</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
     </div>     
    </div>
</div>
<!-- modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">Add to Chart</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-4"><label>QTY</label></div>
                <div class="col-md-6 bottom-10">
                    <div class="input-group">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                              <span class=" icon-minus"></span>
                          </button>
                      </span>

                      <input id="qty" type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="100">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                              <span class=" icon-plus"></span>
                          </button>
                      </span>
                  </div>
                </div>
                
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button id="addToChart" type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
          </div>
        </div>
      </div>
    </div>
<!-- css buatan -->
<link rel="stylesheet" type="text/css" href="/asset/css/mystyle.css">
<script type="text/javascript">
$(document).ready(function() {

        $('.buybtn').click(function(){
            id = $(this).parent().parent().attr('id');
            item = $(this).siblings().children('h5').html();
            qty = $("#qty").val();
            $('#add').modal('show')
            $('#addToChart').on("click",function(){
                var tmp="";
                tmp += "<div class=\"form-group\">";
                tmp += "      <div class=\"col-sm-8\">";
                tmp += "        <input type=\"text\" class=\"form-control\" placeholder=\"meal\" value=\""+item+"\">";
                tmp += "      <\/div>";
                tmp += "      <div class=\"col-sm-4\">";
                tmp += "        <input type=\"text\" class=\"form-control\" placeholder=\"meal\" value=\""+qty+"\">";
                tmp += "      <\/div>";
                tmp += "    <\/div>";
                $("#so").append(tmp);
                $('#'+id).addClass("clicked");
                // alert('add for souvenir '+id)
            })
            
            // console.log($(this).parent().parent().attr('id'))
          
        });

        $('.remove').click(function(){
             id = $(this).parent().parent().attr('id');
          $('#'+id).removeClass("clicked");
        });

 })   

</script>
<script type="text/javascript">
    $('.btn-number').click(function(e){
        e.preventDefault();
        
        fieldName = $(this).attr('data-field');
        type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {
                
                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                } 
                if(parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if(type == 'plus') {

                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function(){
       $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {
        
        minValue =  parseInt($(this).attr('min'));
        maxValue =  parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());
        
        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        
        
    });
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>
@endsection