//alert("hello!");
    //计算名字长度的函数
function getLength(str){
    return str.replace(/[^\xOO-xff]/g,"xx").length;
}
window.onload=function(){
    var alnput=document.getElementsByTagName('input');
    var aname=alnput[1];
    var email=alnput[4];
    var h4=document.getElementsByTagName('h4');
    var name_msg=h4[0];
    var email_msg=h4[1];
    var b=document.getElementsByTagName('b')
    var count=b[0];
    var name_length=0;
    //用户名
    aname.onfocus=function(){
        name_msg.style.display="inline";
        name_msg.innerHTML='5-25个字符，一个汉字为两个字符！';
    }
    email.onfocus=function(){
        email_msg.style.display="inline";
        email_msg.innerHTML='请注意邮箱格式！';
    }/*





































    
    aname.onkeyup=function(){
        name_msg.style.display="none";
        count.style.display="inline";
        name_length=getLength(this.value);
        count.innerHTML=name_length+"个字符";
        if(name_length==0)
        {
            count.style.visibility="hidden";
        }


    }
    aname.onblur=function(){
        var re=/[^\w\u4e00-\u9fa5]/g;
        if(re.test(this.value)){
            name_msg.innerHTML='含有非法字符';
        }
        else if(this.value=""){
            name_msg.innerHTML='不能为空';
        }
        else if (name_length>25) {
            name_msg.innerHTML='长度超过25个字符';
        }
        else if(name_length<6){
            name_msg.innerHTML='长度少于六个字符';
        }
        else{
            name_msg.innerHTML='ok!';
        }
    }*/
}
/*function isEmail(strEmail) {
    if (strEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
    {
        return true;        
    }
    else
    {
        alert("ok");
    }

}*/
/*    function init(){
        //注册一个失去焦点的事件}
        $sel("mail","").onblur=function(){
            ismail(this);
        }

        $sel("name","").onblur=function(){
            isname(this);
        }
    }
    function isname(obj){
        var reg=/^[\u4e00-\u9fa5]{2,4}$/;
        if(!reg.test(obj.value))
        {
            alert("请正确填写姓名！姓名为两到四个汉字。");
            obj.value="";
        }
    }

    function ismail(obj){
        var reg=/[a-zA-Z0-9]{1,10}@[a-zA-Z0-9]{1,5}\.[a-zA-Z0-9]{1,5}/;
        if(!reg.test(obj.value))
        {
            alert("请正确填写邮箱！");
            obj.value="";
        }
    }*/





























/*function check(form) {
    if(form.name.value=='') {
        alert("请输入用户帐号!");
        form.name.focus();
        return false;
    }
    if(form.email.value==''){
        alert("请输入邮箱!");
        form.email.focus();
        return false;
    }
    document.form.submit();*/
//第一种验证表单
/*function check(form) {
    if(form.name.value=='') {
        alert("请输入姓名!");
        form.name.focus();
        return false;
    }
    if(form.email.value==''){
        alert("请输入邮箱!");
        form.email.focus();
        return false;
    }
    document.myform.submit();
}*/

//第二种
/*function check(form) {

    if(form.name.value=='') {
        alert("请输入姓名!");
        form.name.focus();
        return false;
    }
    if(form.email.value==''){
        alert("请输入电邮!");
        form.email.focus();
        return false;
    }
    return true;
}*/

//第三种


//对象选择器
/*function $sel(id,tabname){
    if(id!="" && tabname!=""){
        var tem_obj=document.getElementById(id);
        return tem_obj.getElementsByTagName(tabname);
    }else if(id!=""){
        return document.getElementById(id);
    }else{
        return document.getElementsByTagName(tabname);
    }
}
//验证邮件格式
function ismail(obj){
    var reg=/[a-zA-Z0-9]{1,10}@[a-zA-Z0-9]{1,5}\.[a-zA-Z0-9]{1,5}/;
    if(!reg.test(obj.value)){
        alert("请正确填写邮箱！");
        obj.value="";
    }
}
//验证用户名格式
function isname(obj){
    var reg=/^[\u4e00-\u9fa5]{2,20}$/;
    if(!reg.test(obj.value)){
        alert("请正确填写姓名！姓名为两到二十个汉字。");
        obj.value="";
    }
}
//初始化验证
function init(){
    //注册一个失去焦点的事件

    $sel("mail","").onblur=function(){
        ismail(this);
    }
    $sel("name","").onblur=function(){
        isname(this);
    }
}*/







