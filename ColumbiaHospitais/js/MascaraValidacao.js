          function FormataCpf(evt){
            vr = (navigator.appName === 'Netscap') ?evt.target.value : evt.srcElement.value;
                if(vr.length === 3) vr = vr+".";
                if(vr.length === 7) vr = vr+".";
                if(vr.length === 11) vr = vr+"-";
            return vr;
        }
        
        function FormataRg(evt){
            vr = (navigator.appName === 'Netscap') ?evt.target.value : evt.srcElement.value;
                if(vr.length === 2) vr = vr+".";
                if(vr.length === 6) vr = vr+".";
                if(vr.length === 10) vr = vr+"-";
            return vr;
        }
        function verificaNumero(e){
            if (e.which !== 8 && e.which !== 0 && (e.which <48 || e.which > 57)){
                return false;
            }
           }
            $(document).ready(function() {
               $("#cpf").keypress(verificaNumero);
               });