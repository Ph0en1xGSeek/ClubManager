/**
 * Created by Ph0en1x on 2017/3/21 0021.
 */

$(function(){
    $('#loggin-loggin-btn').click(
        function(){
            document.getElementById("loggin-form").action="__MODULE__/Index/getLogginInfo";
            document.getElementById("loggin-form").submit();
        }
    );

    $('#loggin-register-btn').click(
        function () {
            document.getElementById("loggin-form").action="";
            window.location.href='__MODULE__/Register/index';
        }
    )
})