<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BestScenarioChoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Incident Response
        $questionId1 = DB::table('bestscenario_questions')->where('question_text', 'You receive an email from an unknown sender with an attachment titled "Urgent Invoice." What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Open the attachment to check if it’s legitimate', 'is_correct' => false, 'question_id' => $questionId1],
            ['choice_text' => 'Delete the email immediately', 'is_correct' => false, 'question_id' => $questionId1],
            ['choice_text' => 'Report the email to IT or security for further investigation', 'is_correct' => true, 'question_id' => $questionId1],
        ]);

        $questionId2 = DB::table('bestscenario_questions')->where('question_text', 'You notice an unfamiliar application running on your computer. What is the best course of action?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Close the application and continue working', 'is_correct' => false, 'question_id' => $questionId2],
            ['choice_text' => 'Restart the computer to try and remove the application', 'is_correct' => false, 'question_id' => $questionId2],
            ['choice_text' => 'Report it to IT or security for analysis', 'is_correct' => true, 'question_id' => $questionId2],
        ]);

        $questionId3 = DB::table('bestscenario_questions')->where('question_text', 'A coworker asks you to share your login credentials to access a restricted file. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Share your credentials since they need access', 'is_correct' => false, 'question_id' => $questionId3],
            ['choice_text' => 'Politely refuse and suggest they request access through IT', 'is_correct' => true, 'question_id' => $questionId3],
            ['choice_text' => 'Tell them to ask someone else who has access', 'is_correct' => false, 'question_id' => $questionId3],
        ]);

        $questionId4 = DB::table('bestscenario_questions')->where('question_text', 'You receive a phone call from someone claiming to be IT support, asking for your password to fix an issue. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Provide your password since they are from IT', 'is_correct' => false, 'question_id' => $questionId4],
            ['choice_text' => 'Hang up and report the call to security', 'is_correct' => true, 'question_id' => $questionId4],
            ['choice_text' => 'Ask them to email you for verification', 'is_correct' => false, 'question_id' => $questionId4],
        ]);

        $questionId5 = DB::table('bestscenario_questions')->where('question_text', 'You find a USB drive in the parking lot outside the office. What should you do with it?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Plug it into your computer to see what’s on it', 'is_correct' => false, 'question_id' => $questionId5],
            ['choice_text' => 'Hand it over to IT or security for safe handling', 'is_correct' => true, 'question_id' => $questionId5],
            ['choice_text' => 'Leave it where you found it', 'is_correct' => false, 'question_id' => $questionId5],
        ]);

        $questionId6 = DB::table('bestscenario_questions')->where('question_text', 'You suspect a phishing email made it through the spam filter. What is the best response?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Delete the email and ignore it', 'is_correct' => false, 'question_id' => $questionId6],
            ['choice_text' => 'Forward it to IT or security for review', 'is_correct' => true, 'question_id' => $questionId6],
            ['choice_text' => 'Mark it as spam and move on', 'is_correct' => false, 'question_id' => $questionId6],
        ]);

        $questionId7 = DB::table('bestscenario_questions')->where('question_text', 'While on a video call, you see confidential information displayed on your screen that others can see. What’s the best way to handle it?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Ignore it and continue the call', 'is_correct' => false, 'question_id' => $questionId7],
            ['choice_text' => 'Stop sharing your screen and close the document', 'is_correct' => true, 'question_id' => $questionId7],
            ['choice_text' => 'Minimize the document so it’s harder to see', 'is_correct' => false, 'question_id' => $questionId7],
        ]);

        $questionId8 = DB::table('bestscenario_questions')->where('question_text', 'You receive a message from a “manager” on social media asking for your work email. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Provide your work email since it’s a manager', 'is_correct' => false, 'question_id' => $questionId8],
            ['choice_text' => 'Verify the identity through official work channels', 'is_correct' => true, 'question_id' => $questionId8],
            ['choice_text' => 'Reply and ask why they need it', 'is_correct' => false, 'question_id' => $questionId8],
        ]);

        $questionId9 = DB::table('bestscenario_questions')->where('question_text', 'An unexpected pop-up claims your computer has a virus and provides a phone number for help. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Call the number to get assistance', 'is_correct' => false, 'question_id' => $questionId9],
            ['choice_text' => 'Close the pop-up and report it to IT', 'is_correct' => true, 'question_id' => $questionId9],
            ['choice_text' => 'Follow the instructions on the pop-up', 'is_correct' => false, 'question_id' => $questionId9],
        ]);

        $questionId10 = DB::table('bestscenario_questions')->where('question_text', 'You notice that your computer is suddenly running very slowly and behaving strangely. What’s the best course of action?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Restart the computer and see if it helps', 'is_correct' => false, 'question_id' => $questionId10],
            ['choice_text' => 'Contact IT to report the issue', 'is_correct' => true, 'question_id' => $questionId10],
            ['choice_text' => 'Close all open applications and keep working', 'is_correct' => false, 'question_id' => $questionId10],
        ]);

        $questionId11 = DB::table('bestscenario_questions')->where('question_text', 'During a meeting, you overhear someone discussing sensitive client information in a public area. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Remind them to be cautious about discussing sensitive information in public', 'is_correct' => true, 'question_id' => $questionId11],
            ['choice_text' => 'Ignore it since it doesn’t involve you', 'is_correct' => false, 'question_id' => $questionId11],
            ['choice_text' => 'Report it to HR or security', 'is_correct' => false, 'question_id' => $questionId11],
        ]);

        $questionId12 = DB::table('bestscenario_questions')->where('question_text', 'You suspect that someone has accessed your account without permission. What’s the best first step?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Change your password and inform IT', 'is_correct' => true, 'question_id' => $questionId12],
            ['choice_text' => 'Ignore it if there’s no immediate harm', 'is_correct' => false, 'question_id' => $questionId12],
            ['choice_text' => 'Wait to see if it happens again', 'is_correct' => false, 'question_id' => $questionId12],
        ]);

        $questionId13 = DB::table('bestscenario_questions')->where('question_text', 'You accidentally sent a confidential file to the wrong recipient. What should you do next?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Immediately inform your manager and IT', 'is_correct' => true, 'question_id' => $questionId13],
            ['choice_text' => 'Delete the email and hope it goes unnoticed', 'is_correct' => false, 'question_id' => $questionId13],
            ['choice_text' => 'Send a follow-up asking the recipient to delete the file', 'is_correct' => false, 'question_id' => $questionId13],
        ]);

        $questionId14 = DB::table('bestscenario_questions')->where('question_text', 'You receive an unexpected message from your bank asking you to confirm your account details. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Click the link and provide your information', 'is_correct' => false, 'question_id' => $questionId14],
            ['choice_text' => 'Contact the bank through an official number', 'is_correct' => true, 'question_id' => $questionId14],
            ['choice_text' => 'Ignore the message if it looks suspicious', 'is_correct' => false, 'question_id' => $questionId14],
        ]);

        $questionId15 = DB::table('bestscenario_questions')->where('question_text', 'You accidentally download a suspicious file. What is your next step?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Delete the file and continue working', 'is_correct' => false, 'question_id' => $questionId15],
            ['choice_text' => 'Disconnect from the network and inform IT', 'is_correct' => true, 'question_id' => $questionId15],
            ['choice_text' => 'Open it to check if it’s safe', 'is_correct' => false, 'question_id' => $questionId15],
        ]);

        $questionId16 = DB::table('bestscenario_questions')->where('question_text', 'You receive an email saying your account will be deactivated unless you verify your details. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Click the link to verify your account', 'is_correct' => false, 'question_id' => $questionId16],
            ['choice_text' => 'Report it to IT as a potential phishing attempt', 'is_correct' => true, 'question_id' => $questionId16],
            ['choice_text' => 'Ignore the email if it seems suspicious', 'is_correct' => false, 'question_id' => $questionId16],
        ]);

        $questionId17 = DB::table('bestscenario_questions')->where('question_text', 'You notice sensitive files open on a coworker’s unlocked computer while they are away. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Lock their screen and notify them when they return', 'is_correct' => true, 'question_id' => $questionId17],
            ['choice_text' => 'Ignore it and continue with your work', 'is_correct' => false, 'question_id' => $questionId17],
            ['choice_text' => 'Close the files and leave their computer as it is', 'is_correct' => false, 'question_id' => $questionId17],
        ]);

        $questionId18 = DB::table('bestscenario_questions')->where('question_text', 'You find that your password no longer works and suspect it has been changed without your permission. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Contact IT immediately to investigate', 'is_correct' => true, 'question_id' => $questionId18],
            ['choice_text' => 'Keep trying to log in', 'is_correct' => false, 'question_id' => $questionId18],
            ['choice_text' => 'Change the password back to your original', 'is_correct' => false, 'question_id' => $questionId18],
        ]);

        $questionId19 = DB::table('bestscenario_questions')->where('question_text', 'You receive a work email that looks suspicious but doesn’t contain any obvious red flags. What’s the best response?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Respond to the email to verify its legitimacy', 'is_correct' => false, 'question_id' => $questionId19],
            ['choice_text' => 'Forward it to IT for assessment', 'is_correct' => true, 'question_id' => $questionId19],
            ['choice_text' => 'Ignore it unless it becomes a recurring issue', 'is_correct' => false, 'question_id' => $questionId19],
        ]);

        $questionId20 = DB::table('bestscenario_questions')->where('question_text', 'A customer requests sensitive information via email, claiming they’ve forgotten their login credentials. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Provide the information to assist the customer', 'is_correct' => false, 'question_id' => $questionId20],
            ['choice_text' => 'Direct them to the official account recovery process', 'is_correct' => true, 'question_id' => $questionId20],
            ['choice_text' => 'Verify their identity by asking for personal details', 'is_correct' => false, 'question_id' => $questionId20],
        ]);

        // Device Security
        $questionId21 = DB::table('bestscenario_questions')->where('question_text', 'You are working in a public space and need to step away briefly. What should you do with your laptop?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Leave it unattended if it’s only for a few minutes', 'is_correct' => false, 'question_id' => $questionId21],
            ['choice_text' => 'Lock the screen and take it with you if possible', 'is_correct' => true, 'question_id' => $questionId21],
            ['choice_text' => 'Cover it with a jacket and leave it at your table', 'is_correct' => false, 'question_id' => $questionId21],
        ]);

        $questionId22 = DB::table('bestscenario_questions')->where('question_text', 'You receive a prompt to update your device’s operating system. What is the best action?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Ignore the update and continue working', 'is_correct' => false, 'question_id' => $questionId22],
            ['choice_text' => 'Postpone it for a few weeks', 'is_correct' => false, 'question_id' => $questionId22],
            ['choice_text' => 'Update as soon as possible to ensure device security', 'is_correct' => true, 'question_id' => $questionId22],
        ]);

        $questionId23 = DB::table('bestscenario_questions')->where('question_text', 'You need to store a sensitive file on your device. What is the safest way to do so?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Save it to a secured, encrypted folder', 'is_correct' => true, 'question_id' => $questionId23],
            ['choice_text' => 'Save it directly on your desktop', 'is_correct' => false, 'question_id' => $questionId23],
            ['choice_text' => 'Email it to yourself for easy access', 'is_correct' => false, 'question_id' => $questionId23],
        ]);

        $questionId24 = DB::table('bestscenario_questions')->where('question_text', 'You’re using a shared computer at work. What should you do after logging in?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Log out and clear browsing history after your session', 'is_correct' => true, 'question_id' => $questionId24],
            ['choice_text' => 'Leave your session open for the next person', 'is_correct' => false, 'question_id' => $questionId24],
            ['choice_text' => 'Save your password in the browser for convenience', 'is_correct' => false, 'question_id' => $questionId24],
        ]);

        $questionId25 = DB::table('bestscenario_questions')->where('question_text', 'You lose your work phone, which has sensitive information. What is the first thing you should do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Wait a few days to see if it turns up', 'is_correct' => false, 'question_id' => $questionId25],
            ['choice_text' => 'Report the loss to IT or security immediately', 'is_correct' => true, 'question_id' => $questionId25],
            ['choice_text' => 'Remotely erase data if it doesn’t reappear in a day', 'is_correct' => false, 'question_id' => $questionId25],
        ]);

        $questionId26 = DB::table('bestscenario_questions')->where('question_text', 'You receive a notification that your antivirus software license has expired. What’s the best response?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Renew the license as soon as possible', 'is_correct' => true, 'question_id' => $questionId26],
            ['choice_text' => 'Ignore it and continue using your device', 'is_correct' => false, 'question_id' => $questionId26],
            ['choice_text' => 'Uninstall the antivirus software', 'is_correct' => false, 'question_id' => $questionId26],
        ]);

        $questionId27 = DB::table('bestscenario_questions')->where('question_text', 'You are working in a coffee shop and need to connect to Wi-Fi. Which is the best approach?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Use the public Wi-Fi network', 'is_correct' => false, 'question_id' => $questionId27],
            ['choice_text' => 'Use a VPN to encrypt your connection on public Wi-Fi', 'is_correct' => true, 'question_id' => $questionId27],
            ['choice_text' => 'Connect without a password for convenience', 'is_correct' => false, 'question_id' => $questionId27],
        ]);

        $questionId28 = DB::table('bestscenario_questions')->where('question_text', 'You find a USB drive labeled "Company Project" in a meeting room. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Insert it into your computer to see what’s on it', 'is_correct' => false, 'question_id' => $questionId28],
            ['choice_text' => 'Hand it over to IT or security for inspection', 'is_correct' => true, 'question_id' => $questionId28],
            ['choice_text' => 'Leave it in the meeting room in case someone claims it', 'is_correct' => false, 'question_id' => $questionId28],
        ]);

        $questionId29 = DB::table('bestscenario_questions')->where('question_text', 'You’re prompted to install a software update on your work laptop. When should you install it?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Right away to keep your device secure', 'is_correct' => true, 'question_id' => $questionId29],
            ['choice_text' => 'Wait until the end of the month', 'is_correct' => false, 'question_id' => $questionId29],
            ['choice_text' => 'Ignore it if your system seems to be working fine', 'is_correct' => false, 'question_id' => $questionId29],
        ]);

        $questionId30 = DB::table('bestscenario_questions')->where('question_text', 'You need to transfer files from your laptop to a colleague’s computer. What’s the safest method?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Email the files to your colleague', 'is_correct' => false, 'question_id' => $questionId30],
            ['choice_text' => 'Use an encrypted USB drive', 'is_correct' => true, 'question_id' => $questionId30],
            ['choice_text' => 'Share the files over public Wi-Fi', 'is_correct' => false, 'question_id' => $questionId30],
        ]);

        $questionId31 = DB::table('bestscenario_questions')->where('question_text', 'A pop-up claims you’ve won a prize and asks you to click a link. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Close the pop-up without clicking', 'is_correct' => true, 'question_id' => $questionId31],
            ['choice_text' => 'Click to claim your prize', 'is_correct' => false, 'question_id' => $questionId31],
            ['choice_text' => 'Leave it open and decide later', 'is_correct' => false, 'question_id' => $questionId31],
        ]);

        $questionId32 = DB::table('bestscenario_questions')->where('question_text', 'You notice an unauthorized app installed on your work phone. What’s your best response?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Delete the app and continue working', 'is_correct' => false, 'question_id' => $questionId32],
            ['choice_text' => 'Report it to IT or security', 'is_correct' => true, 'question_id' => $questionId32],
            ['choice_text' => 'Ignore it if it’s not causing issues', 'is_correct' => false, 'question_id' => $questionId32],
        ]);

        $questionId33 = DB::table('bestscenario_questions')->where('question_text', 'You’re asked to share your password with a colleague to access a project. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Politely refuse and suggest they request access from IT', 'is_correct' => true, 'question_id' => $questionId33],
            ['choice_text' => 'Share your password temporarily', 'is_correct' => false, 'question_id' => $questionId33],
            ['choice_text' => 'Tell them to ask someone else for access', 'is_correct' => false, 'question_id' => $questionId33],
        ]);

        $questionId34 = DB::table('bestscenario_questions')->where('question_text', 'Your device’s battery is running low in a public space, and you need to charge it. What is the best approach?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Use any available USB port', 'is_correct' => false, 'question_id' => $questionId34],
            ['choice_text' => 'Use a personal portable charger if you have one', 'is_correct' => true, 'question_id' => $questionId34],
            ['choice_text' => 'Borrow a charger from a stranger', 'is_correct' => false, 'question_id' => $questionId34],
        ]);

        $questionId35 = DB::table('bestscenario_questions')->where('question_text', 'You need to access sensitive information remotely. What is the safest way to do this?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Use public Wi-Fi to save on data costs', 'is_correct' => false, 'question_id' => $questionId35],
            ['choice_text' => 'Connect through a secure VPN', 'is_correct' => true, 'question_id' => $questionId35],
            ['choice_text' => 'Use a friend’s Wi-Fi network', 'is_correct' => false, 'question_id' => $questionId35],
        ]);

        $questionId36 = DB::table('bestscenario_questions')->where('question_text', 'You are about to sell your old work phone. What should you do first?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Reset it to factory settings and erase all data', 'is_correct' => true, 'question_id' => $questionId36],
            ['choice_text' => 'Remove the SIM card and sell it as-is', 'is_correct' => false, 'question_id' => $questionId36],
            ['choice_text' => 'Delete only the apps you installed', 'is_correct' => false, 'question_id' => $questionId36],
        ]);

        $questionId37 = DB::table('bestscenario_questions')->where('question_text', 'You discover a device on your network that you don’t recognize. What’s your best course of action?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Disconnect it immediately', 'is_correct' => false, 'question_id' => $questionId37],
            ['choice_text' => 'Report it to IT for further investigation', 'is_correct' => true, 'question_id' => $questionId37],
            ['choice_text' => 'Ignore it if it’s not causing issues', 'is_correct' => false, 'question_id' => $questionId37],
        ]);

        $questionId38 = DB::table('bestscenario_questions')->where('question_text', 'You need to write down a new complex password. Where is the safest place to store it?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'In a password manager', 'is_correct' => true, 'question_id' => $questionId38],
            ['choice_text' => 'On a sticky note on your desk', 'is_correct' => false, 'question_id' => $questionId38],
            ['choice_text' => 'In an email to yourself', 'is_correct' => false, 'question_id' => $questionId38],
        ]);

        $questionId39 = DB::table('bestscenario_questions')->where('question_text', 'You are prompted to install a file from an unknown source on your work laptop. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Install the file if it looks legitimate', 'is_correct' => false, 'question_id' => $questionId39],
            ['choice_text' => 'Check with IT before installing', 'is_correct' => true, 'question_id' => $questionId39],
            ['choice_text' => 'Proceed if your antivirus is running', 'is_correct' => false, 'question_id' => $questionId39],
        ]);

        $questionId40 = DB::table('bestscenario_questions')->where('question_text', 'You need to use a colleague’s device temporarily for work. What is the best way to handle your account?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Log in and remember to log out afterward', 'is_correct' => false, 'question_id' => $questionId40],
            ['choice_text' => 'Avoid using personal accounts on shared devices', 'is_correct' => true, 'question_id' => $questionId40],
            ['choice_text' => 'Save your login information in the browser for quick access', 'is_correct' => false, 'question_id' => $questionId40],
        ]);

        // Workplace Security
        $questionId41 = DB::table('bestscenario_questions')->where('question_text', 'You notice an unfamiliar person without a badge in a restricted area. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Assume they’re allowed there and ignore them', 'is_correct' => false, 'question_id' => $questionId41],
            ['choice_text' => 'Politely ask if they need assistance and report to security if necessary', 'is_correct' => true, 'question_id' => $questionId41],
            ['choice_text' => 'Approach them aggressively to confirm their identity', 'is_correct' => false, 'question_id' => $questionId41],
        ]);

        $questionId42 = DB::table('bestscenario_questions')->where('question_text', 'You need to leave your desk for a meeting. What is the best way to secure your computer?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Leave it as is since you’ll only be gone for a few minutes', 'is_correct' => false, 'question_id' => $questionId42],
            ['choice_text' => 'Log out or lock the screen before leaving', 'is_correct' => true, 'question_id' => $questionId42],
            ['choice_text' => 'Minimize open windows for privacy', 'is_correct' => false, 'question_id' => $questionId42],
        ]);

        $questionId43 = DB::table('bestscenario_questions')->where('question_text', 'You find a document marked “Confidential” left in the break room. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Leave it there in case the owner returns', 'is_correct' => false, 'question_id' => $questionId43],
            ['choice_text' => 'Take it to the security office or manager', 'is_correct' => true, 'question_id' => $questionId43],
            ['choice_text' => 'Throw it away to prevent others from seeing it', 'is_correct' => false, 'question_id' => $questionId43],
        ]);

        $questionId44 = DB::table('bestscenario_questions')->where('question_text', 'You’re asked to verify the identity of a visitor. What is the best way to do this?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Ask them casually who they are', 'is_correct' => false, 'question_id' => $questionId44],
            ['choice_text' => 'Check their ID and confirm with the person they’re visiting', 'is_correct' => true, 'question_id' => $questionId44],
            ['choice_text' => 'Assume they’re legitimate and escort them in', 'is_correct' => false, 'question_id' => $questionId44],
        ]);

        $questionId45 = DB::table('bestscenario_questions')->where('question_text', 'You see someone attempting to enter a secure area by following closely behind an employee. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Ignore it, as it may be harmless', 'is_correct' => false, 'question_id' => $questionId45],
            ['choice_text' => 'Politely ask if they have proper access and report the incident', 'is_correct' => true, 'question_id' => $questionId45],
            ['choice_text' => 'Block them from entering', 'is_correct' => false, 'question_id' => $questionId45],
        ]);

        $questionId46 = DB::table('bestscenario_questions')->where('question_text', 'A coworker left their computer unlocked. What’s the best approach?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Lock it for them and remind them of the policy when they return', 'is_correct' => true, 'question_id' => $questionId46],
            ['choice_text' => 'Ignore it, as it’s not your responsibility', 'is_correct' => false, 'question_id' => $questionId46],
            ['choice_text' => 'Leave a note reminding them to lock their computer', 'is_correct' => false, 'question_id' => $questionId46],
        ]);

        $questionId47 = DB::table('bestscenario_questions')->where('question_text', 'You’re handling sensitive documents at your desk when a visitor arrives unexpectedly. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Cover the documents or lock them away immediately', 'is_correct' => true, 'question_id' => $questionId47],
            ['choice_text' => 'Continue working on them until the visitor leaves', 'is_correct' => false, 'question_id' => $questionId47],
            ['choice_text' => 'Ask the visitor to wait outside while you finish', 'is_correct' => false, 'question_id' => $questionId47],
        ]);

        $questionId48 = DB::table('bestscenario_questions')->where('question_text', 'You notice the office door is propped open with no one around. What’s the best course of action?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Close and lock the door immediately', 'is_correct' => false, 'question_id' => $questionId48],
            ['choice_text' => 'Leave it open in case someone needs access', 'is_correct' => false, 'question_id' => $questionId48],
            ['choice_text' => 'Report it to security and close the door if possible', 'is_correct' => true, 'question_id' => $questionId48],
        ]);

        $questionId49 = DB::table('bestscenario_questions')->where('question_text', 'During a meeting, you notice someone taking photos of sensitive information on the screen. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Ignore it, as it might be harmless', 'is_correct' => false, 'question_id' => $questionId49],
            ['choice_text' => 'Politely ask them to stop and remind them about confidentiality', 'is_correct' => true, 'question_id' => $questionId49],
            ['choice_text' => 'Take photos yourself for evidence', 'is_correct' => false, 'question_id' => $questionId49],
        ]);

        $questionId50 = DB::table('bestscenario_questions')->where('question_text', 'You’re the last to leave a conference room where sensitive discussions took place. What should you check before leaving?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Ensure all documents and devices are taken or secured', 'is_correct' => true, 'question_id' => $questionId50],
            ['choice_text' => 'Leave everything as it is for the cleaning staff', 'is_correct' => false, 'question_id' => $questionId50],
            ['choice_text' => 'Close the door but leave materials on the table', 'is_correct' => false, 'question_id' => $questionId50],
        ]);

        $questionId51 = DB::table('bestscenario_questions')->where('question_text', 'You’re working on a confidential project and have to leave your desk temporarily. What should you do with the documents?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Leave them on your desk for quick access', 'is_correct' => false, 'question_id' => $questionId51],
            ['choice_text' => 'Lock them in a drawer or secure area', 'is_correct' => true, 'question_id' => $questionId51],
            ['choice_text' => 'Flip them over so they aren’t easily visible', 'is_correct' => false, 'question_id' => $questionId51],
        ]);

        $questionId52 = DB::table('bestscenario_questions')->where('question_text', 'An unknown individual asks you to let them into a restricted area, saying they “forgot their badge.” What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Let them in as a courtesy', 'is_correct' => false, 'question_id' => $questionId52],
            ['choice_text' => 'Politely refuse and direct them to security', 'is_correct' => true, 'question_id' => $questionId52],
            ['choice_text' => 'Ask them to follow you in', 'is_correct' => false, 'question_id' => $questionId52],
        ]);

        $questionId53 = DB::table('bestscenario_questions')->where('question_text', 'You accidentally left a sensitive document in the printer room. What’s the best response?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Retrieve it immediately to ensure it’s secure', 'is_correct' => true, 'question_id' => $questionId53],
            ['choice_text' => 'Leave it until the end of the day', 'is_correct' => false, 'question_id' => $questionId53],
            ['choice_text' => 'Ask a coworker to pick it up for you', 'is_correct' => false, 'question_id' => $questionId53],
        ]);

        $questionId54 = DB::table('bestscenario_questions')->where('question_text', 'You’re going on break and notice an unattended visitor wandering around. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Offer assistance and escort them to the reception area', 'is_correct' => true, 'question_id' => $questionId54],
            ['choice_text' => 'Ignore them, as they’re probably authorized', 'is_correct' => false, 'question_id' => $questionId54],
            ['choice_text' => 'Ask them to leave the area immediately', 'is_correct' => false, 'question_id' => $questionId54],
        ]);

        $questionId55 = DB::table('bestscenario_questions')->where('question_text', 'You receive an unexpected package labeled “Confidential.” What’s the best response?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Open it to check its contents', 'is_correct' => false, 'question_id' => $questionId55],
            ['choice_text' => 'Report it to security or your manager', 'is_correct' => true, 'question_id' => $questionId55],
            ['choice_text' => 'Leave it for the recipient to pick up', 'is_correct' => false, 'question_id' => $questionId55],
        ]);

        $questionId56 = DB::table('bestscenario_questions')->where('question_text', 'You notice someone swiping their badge multiple times without success. They ask for your help. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Let them use your badge to enter', 'is_correct' => false, 'question_id' => $questionId56],
            ['choice_text' => 'Suggest they contact security for assistance', 'is_correct' => true, 'question_id' => $questionId56],
            ['choice_text' => 'Ignore the request and walk away', 'is_correct' => false, 'question_id' => $questionId56],
        ]);

        $questionId57 = DB::table('bestscenario_questions')->where('question_text', 'You need to dispose of a printed document containing sensitive information. What is the best way to do this?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Tear it in half and throw it in the regular trash', 'is_correct' => false, 'question_id' => $questionId57],
            ['choice_text' => 'Shred the document using a secure shredder', 'is_correct' => true, 'question_id' => $questionId57],
            ['choice_text' => 'Crumple it up and toss it', 'is_correct' => false, 'question_id' => $questionId57],
        ]);

        $questionId58 = DB::table('bestscenario_questions')->where('question_text', 'A colleague asks you to sign in for them on the visitor log since they forgot. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Sign in for them to help out', 'is_correct' => false, 'question_id' => $questionId58],
            ['choice_text' => 'Suggest they speak to security for assistance', 'is_correct' => true, 'question_id' => $questionId58],
            ['choice_text' => 'Ignore the request and move on', 'is_correct' => false, 'question_id' => $questionId58],
        ]);

        $questionId59 = DB::table('bestscenario_questions')->where('question_text', 'You notice sensitive files are open on a computer in an empty meeting room. What should you do?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Close the files and log out', 'is_correct' => false, 'question_id' => $questionId59],
            ['choice_text' => 'Lock the screen and inform the person who left it', 'is_correct' => true, 'question_id' => $questionId59],
            ['choice_text' => 'Leave it as it is for the next user', 'is_correct' => false, 'question_id' => $questionId59],
        ]);

        $questionId60 = DB::table('bestscenario_questions')->where('question_text', 'You overhear two colleagues discussing sensitive information in the hallway. What’s the best approach?')->value('id');
        DB::table('bestscenario_choices')->insert([
            ['choice_text' => 'Politely remind them of the company’s confidentiality policy', 'is_correct' => true, 'question_id' => $questionId60],
            ['choice_text' => 'Ignore it since you’re not involved', 'is_correct' => false, 'question_id' => $questionId60],
            ['choice_text' => 'Report it immediately to HR', 'is_correct' => false, 'question_id' => $questionId60],
        ]);
    }
}
