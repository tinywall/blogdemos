
<style>
#tw-form-outer {

}
#tw-form{
font-family: Tahoma, Geneva, sans-serif;
-moz-border-radius: 4px;
-webkit-border-radius: 4px;
border: #aaa 1px solid;
background: #DDDDDD;
background: -moz-linear-gradient(top, #C4C4C4 0%, #EAEAEA 0%, #D3D3D3 100%); /* firefox */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#C4C4C4), color-stop(0%,#EAEAEA), color-stop(100%,#D3D3D3)); /* webkit */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#C4C4C4', endColorstr='#D3D3D3',GradientType=0 ); /* ie */
width: 180px;
float: left;
padding: 0 4px;
border-top-left-radius: 4px 4px;
border-top-right-radius: 4px 4px;
border-bottom-right-radius: 4px 4px;
border-bottom-left-radius: 4px 4px;
}
#tw-form #tw-input-text{
width: 145px;
float: left;
border: 0;
background: #DDDDDD;
background: -moz-linear-gradient(top, #C4C4C4 0%, #EAEAEA 0%, #D3D3D3 100%); /* firefox */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#C4C4C4), color-stop(0%,#EAEAEA), color-stop(100%,#D3D3D3)); /* webkit */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#C4C4C4', endColorstr='#D3D3D3',GradientType=0 ); /* ie */
color: #777;
line-height: 100%;
font-size: 12px;
font-family: Tahoma, Geneva, sans-serif;
margin-top:3px;margin-bottom:3px;
height:20px;
}
#tw-form #tw-input-text:focus{
outline:none;
color:#333;
}
#tw-form #tw-input-submit{
background: url(search-zoom-icon.png) no-repeat 8px 5px;
border: 0;
float: left;
width: 22px;
z-index: 100;
cursor: pointer;
}
</style>
<div id="tw-form-outer">
<form action="" method="post" id="tw-form">    
	<input type="text" id="tw-input-text" name="query" value='search' onfocus="if(this.value=='search'){this.value='';}" onblur="if(this.value==''){this.value='search';}" /> 
    <input type="submit" id="tw-input-submit" value="" /> 
</form>
</div>