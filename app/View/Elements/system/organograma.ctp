
<script type="text/javascript" src="/sgacopia/js/jquery-charts/jquery.min.js"></script>


<script>
jQuery(document).ready(function() {
    $("#org").jOrgChart({
        chartElement : '#chart',
        dragAndDrop  : false
    });
});
</script>
    
    <?php
        function lista($var)
        {
            if(!empty($var['Bovino']['nome']))
            {
                echo "<li>";
                echo "<br><a href='{$var['Bovino']['id']}' target='_blank'>{$var['Bovino']['nome']}</a>";
                if(!empty($var[0]) || !empty($var[1]) )
                {
                    echo "<ul> ";
                    lista($var[0]);
                    lista($var[1]);
                    echo "</ul> ";
                }
                echo "</li>";                
            }
            else
            {
                echo "<li><br>???</li>";
            }
        }
        echo '<ul id="org" style="display:none">';
        
        lista($heranca);
        echo '</ul>';        
        //pr($heranca);        
    ?>
<p></p>
<div class="title">
    <h3>
        <span class="icon16 icomoon-icon-equalizer-2"></span>
        <span>Arvore genealógica</span>                    
    </h3>
</div>
<div id="chart" class="orgChart"></div>

<script>
    jQuery(document).ready(function() {
        
        /* Custom jQuery for the example */
        $("#show-list").click(function(e){
            e.preventDefault();
            
            $('#list-html').toggle('fast', function(){
                if($(this).is(':visible')){
                    $('#show-list').text('Hide underlying list.');
                    $(".topbar").fadeTo('fast',0.9);
                }else{
                    $('#show-list').text('Show underlying list.');
                    $(".topbar").fadeTo('fast',1);                  
                }
            });
        });
        
        $('#list-html').text($('#org').html());
        
        $("#org").bind("DOMSubtreeModified", function() {
            $('#list-html').text('');
            
            $('#list-html').text($('#org').html());
            
            prettyPrint();                
        });
    });
</script>