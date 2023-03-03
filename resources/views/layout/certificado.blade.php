<div id="page1-div" style="position:relative;width:892px;height:1262px;">
    <img width="892" height="1262" src={{ url('static/images/bg-certificado.png') }} alt="background image"/>
    
    <div style="position:absolute; top:320px;" class="center">
        <img  style="height:200px; width:auto" src={{ url($item['joia']) }} alt="joia image"/>
    </div>

    <p style="position:absolute; top:520px;" class="center texto">
        A Grande Loja Maçônica do Estado do Ceará e o Conselho Eleitoral Maçônico certificam que o Irmão
    </p>
    
    <p style="position:absolute; top:560px; color:#1F55C2" class="center destaque1">
        {{ Str::upper($item['irmao']) }}
    </p> 
    
    <p style="position:absolute; top:660px;" class="center texto">
        foi empossado pela Loja
    </p> 

    <p style="position:absolute; top:690px;" class="center destaque2">
        {{ Str::upper($item['loja']) }}
    </p>

    <p style="position:absolute; top:760px;" class="center texto">
        para desempenhar o cargo de
    </p>

    <p style="position:absolute; top:790px;" class="center destaque2">
        {{ Str::upper($item['cargo']) }}
    </p>

    <p style="position:absolute; top:840px;" class="center texto">
        no período administrativo de <strong>{{ date('d/m/Y', strtotime($item['inicio'])) }}</strong> a <strong>{{ date('d/m/Y', strtotime($item['fim'])) }}</strong>.
    </p>

    <p style="position:absolute; top:890px;" class="center texto">
        Or&there4; de Fortaleza-CE, 02 de março de 2023 da E&there4;V&there4;.
    </p>

    <p style="position:absolute; top:1140px; left:385px;" class="center texto-mini">
        REGISTRO GLMECE: 0000/2023.
    </p>
</div>