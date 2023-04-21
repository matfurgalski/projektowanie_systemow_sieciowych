<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Hello World | Amelia framework </title>
</head>

<body>
    
    My value: 

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>id</th>
            <th>nazwa</th>
            <th>role</th>

        </tr>
    </thead>
    <tbody>

    </tbody>
    </table>
 

    {foreach $conf->roles as $p}
    {strip}
        {$p}
    {/strip}
    {/foreach}

    {print_r($conf->roles)}

    {$smarty.session.test}
    <br/>
    {$smarty.session.passs}


    {if $msgs->isMessage()}
    <div class="messages bottom-margin">
        <ul>
        {foreach $msgs->getMessages() as $msg}
        {strip}
            <li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
        {/strip}
        {/foreach}
        </ul>
    </div>
    {/if}


    

    

 

</body>

</html>