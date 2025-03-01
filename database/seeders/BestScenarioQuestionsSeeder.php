<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BestScenarioQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve Catregory ID
        $incidentresponseCategoryId = DB::table('bestscenario_categories')->where('name', 'incident-response')->value('id');

        $devicesecurityCategoryId = DB::table('bestscenario_categories')->where('name', 'device-security')->value('id');

        $workplacesecurityCategoryId = DB::table('bestscenario_categories')->where('name', 'workplace-security')->value('id');

        // Insert questions for 'Incident Response' category
        DB::table('bestscenario_questions')->insert([
            [
                'question_text' => 'You receive an email from an unknown sender with an attachment titled "Urgent Invoice." What should you do?',
                'reason' => 'Explanation: Reporting suspicious emails to IT or security helps prevent potential phishing or malware attacks.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'You notice an unfamiliar application running on your computer. What is the best course of action?',
                'reason' => 'Explanation: Reporting unfamiliar applications ensures that IT can check for malware or unauthorized software on your device.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'A coworker asks you to share your login credentials to access a restricted file. What should you do?',
                'reason' => 'Explanation: Sharing login credentials is a security risk. Directing them to IT ensures secure access.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'You receive a phone call from someone claiming to be IT support, asking for your password to fix an issue. What should you do?',
                'reason' => 'Explanation: IT support will never ask for passwords over the phone. Reporting suspicious calls helps prevent phishing attacks.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'You find a USB drive in the parking lot outside the office. What should you do with it?',
                'reason' => 'Explanation: IT can safely inspect the USB drive to determine if it’s safe or if it contains malware.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'You suspect a phishing email made it through the spam filter. What is the best response?',
                'reason' => 'Explanation: Forwarding suspicious emails to IT helps them take necessary precautions to protect the organization.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'While on a video call, you see confidential information displayed on your screen that others can see. What’s the best way to handle it?',
                'reason' => 'Explanation: Stopping screen sharing and closing the document protects confidential information from being accidentally shared.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'You receive a message from a “manager” on social media asking for your work email. What should you do?',
                'reason' => 'Explanation: Verifying through official channels ensures the request is legitimate and helps avoid social engineering risks.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'An unexpected pop-up claims your computer has a virus and provides a phone number for help. What should you do?',
                'reason' => 'Explanation: Fake virus alerts are common phishing tactics. Reporting it helps IT ensure the system is secure.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'You notice that your computer is suddenly running very slowly and behaving strangely. What’s the best course of action?',
                'reason' => 'Explanation: Strange behavior on a computer could indicate malware. Reporting it ensures IT can investigate.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'During a meeting, you overhear someone discussing sensitive client information in a public area. What should you do?',
                'reason' => 'Explanation: Gently reminding them encourages secure behavior without escalating the situation unnecessarily.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'You suspect that someone has accessed your account without permission. What’s the best first step?',
                'reason' => 'Explanation: Changing the password and informing IT helps secure your account and allows IT to investigate further.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'You accidentally sent a confidential file to the wrong recipient. What should you do next?',
                'reason' => 'Explanation: Informing your manager and IT allows them to respond quickly and helps mitigate potential risks.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'You receive an unexpected message from your bank asking you to confirm your account details. What should you do?',
                'reason' => 'Explanation: Contacting the bank directly ensures that you’re communicating with a legitimate representative.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'You accidentally download a suspicious file. What is your next step?',
                'reason' => 'Explanation: Disconnecting prevents potential malware from spreading, and informing IT allows them to handle the situation safely.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'You receive an email saying your account will be deactivated unless you verify your details. What should you do?',
                'reason' => 'Explanation: Reporting phishing attempts allows IT to protect the network and other users from similar threats.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'You notice sensitive files open on a coworker’s unlocked computer while they are away. What should you do?',
                'reason' => 'Explanation: Locking the screen secures the information without altering any files, and informing the coworker helps reinforce secure behavior.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'You find that your password no longer works and suspect it has been changed without your permission. What should you do?',
                'reason' => 'Explanation: Reporting suspected unauthorized changes helps IT secure your account and investigate any potential breach.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'You receive a work email that looks suspicious but doesn’t contain any obvious red flags. What’s the best response?',
                'reason' => 'Explanation: Forwarding suspicious emails to IT allows them to investigate and prevent potential threats.',
                'category_id' => $incidentresponseCategoryId,
            ],
            [
                'question_text' => 'A customer requests sensitive information via email, claiming they’ve forgotten their login credentials. What should you do?',
                'reason' => 'Explanation: Following official account recovery processes protects both the customer’s data and the organization from unauthorized access.',
                'category_id' => $incidentresponseCategoryId,
            ],
        ]);

        // Insert questions for 'Device Security' category
        DB::table('bestscenario_questions')->insert([
            [
                'question_text' => 'You are working in a public space and need to step away briefly. What should you do with your laptop?',
                'reason' => 'Explanation: Locking and taking your laptop ensures that it stays secure, even in a public area.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You receive a prompt to update your device’s operating system. What is the best action?',
                'reason' => 'Explanation: Updating promptly ensures your device has the latest security patches, protecting it from vulnerabilities.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You need to store a sensitive file on your device. What is the safest way to do so?',
                'reason' => 'Explanation: Storing sensitive files in an encrypted folder adds a layer of protection in case the device is lost or compromised.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You’re using a shared computer at work. What should you do after logging in?',
                'reason' => 'Explanation: Logging out and clearing history helps protect your information on shared devices.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You lose your work phone, which has sensitive information. What is the first thing you should do?',
                'reason' => 'Explanation: Reporting immediately allows IT to secure or wipe data remotely, reducing the risk of data exposure.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You receive a notification that your antivirus software license has expired. What’s the best response?',
                'reason' => 'Explanation: Renewing the license ensures your antivirus software is active and can detect potential threats.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You are working in a coffee shop and need to connect to Wi-Fi. Which is the best approach?',
                'reason' => 'Explanation: Using a VPN on public Wi-Fi protects your data by encrypting the connection.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You find a USB drive labeled "Company Project" in a meeting room. What should you do?',
                'reason' => 'Explanation: IT can safely check the USB drive for malware and determine if it belongs to someone in the company.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You’re prompted to install a software update on your work laptop. When should you install it?',
                'reason' => 'Explanation: Installing updates promptly ensures your device is protected against newly discovered vulnerabilities.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You need to transfer files from your laptop to a colleague’s computer. What’s the safest method?',
                'reason' => 'Explanation: An encrypted USB drive ensures the files are protected in transit.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'A pop-up claims you’ve won a prize and asks you to click a link. What should you do?',
                'reason' => 'Explanation: Closing pop-ups without interacting with them helps protect against phishing and malware attacks.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You notice an unauthorized app installed on your work phone. What’s your best response?',
                'reason' => 'Explanation: Reporting unauthorized apps allows IT to investigate and secure the device if necessary.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You’re asked to share your password with a colleague to access a project. What should you do?',
                'reason' => 'Explanation: Sharing passwords is a security risk; directing them to IT ensures secure access.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'Your device’s battery is running low in a public space, and you need to charge it. What is the best approach?',
                'reason' => 'Explanation: Public USB ports can carry risks of data theft. Using your own charger or power bank is safer.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You need to access sensitive information remotely. What is the safest way to do this?',
                'reason' => 'Explanation: A VPN encrypts your internet connection, protecting sensitive information when working remotely.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You are about to sell your old work phone. What should you do first?',
                'reason' => 'Explanation: Factory resetting ensures that all data is erased, protecting your information from the new owner.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You discover a device on your network that you don’t recognize. What’s your best course of action?',
                'reason' => 'Explanation: Reporting an unknown device allows IT to determine if it’s unauthorized and take action if needed.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You need to write down a new complex password. Where is the safest place to store it?',
                'reason' => 'Explanation: Password managers securely store and encrypt passwords, keeping them safe from unauthorized access.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You are prompted to install a file from an unknown source on your work laptop. What should you do?',
                'reason' => 'Explanation: Checking with IT ensures that the file is safe and authorized, preventing potential malware installation.',
                'category_id' => $devicesecurityCategoryId,
            ],
            [
                'question_text' => 'You need to use a colleague’s device temporarily for work. What is the best way to handle your account?',
                'reason' => 'Explanation: Avoiding personal accounts on shared devices reduces the risk of unauthorized access to your accounts.',
                'category_id' => $devicesecurityCategoryId,
            ],
        ]);

        // Insert questions for 'Workplace Security' category
        DB::table('bestscenario_questions')->insert([
            [
                'question_text' => 'You notice an unfamiliar person without a badge in a restricted area. What should you do?',
                'reason' => 'Explanation: Politely offering help and reporting any suspicious behavior to security helps ensure workplace safety.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'You need to leave your desk for a meeting. What is the best way to secure your computer?',
                'reason' => 'Explanation: Locking your screen ensures no one can access your device while you’re away, protecting your work and data.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'You find a document marked “Confidential” left in the break room. What should you do?',
                'reason' => 'Explanation: Delivering confidential documents to security or a manager ensures sensitive information remains protected.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'You’re asked to verify the identity of a visitor. What is the best way to do this?',
                'reason' => 'Explanation: Checking an ID and verifying with a host ensures only authorized visitors access the workplace.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'You see someone attempting to enter a secure area by following closely behind an employee. What should you do?',
                'reason' => 'Explanation: Politely questioning and reporting suspicious behavior helps prevent unauthorized access.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'A coworker left their computer unlocked. What’s the best approach?',
                'reason' => 'Explanation: Locking the computer and reminding them reinforces security policies without leaving the device vulnerable.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'You’re handling sensitive documents at your desk when a visitor arrives unexpectedly. What should you do?',
                'reason' => 'Explanation: Securing sensitive documents helps prevent unauthorized access and protects confidential information.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'You notice the office door is propped open with no one around. What’s the best course of action?',
                'reason' => 'Explanation: Reporting the incident and closing the door ensures the area remains secure while notifying security of the breach.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'During a meeting, you notice someone taking photos of sensitive information on the screen. What should you do?',
                'reason' => 'Explanation: Politely stopping unauthorized photography protects confidential information and reinforces security policies.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'You’re the last to leave a conference room where sensitive discussions took place. What should you check before leaving?',
                'reason' => 'Explanation: Ensuring that all materials are removed or secured prevents sensitive information from being exposed.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'You’re working on a confidential project and have to leave your desk temporarily. What should you do with the documents?',
                'reason' => 'Explanation: Securing confidential documents in a locked area prevents unauthorized access while you’re away.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'An unknown individual asks you to let them into a restricted area, saying they “forgot their badge.” What should you do?',
                'reason' => 'Explanation: Directing them to security ensures that only authorized individuals access restricted areas.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'You accidentally left a sensitive document in the printer room. What’s the best response?',
                'reason' => 'Explanation: Retrieving sensitive documents immediately helps prevent unauthorized access.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'You’re going on break and notice an unattended visitor wandering around. What should you do?',
                'reason' => 'Explanation: Assisting and guiding visitors back to reception helps maintain a secure workplace environment.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'You receive an unexpected package labeled “Confidential.” What’s the best response?',
                'reason' => 'Explanation: Reporting unexpected packages ensures they are handled safely and securely.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'You notice someone swiping their badge multiple times without success. They ask for your help. What should you do?',
                'reason' => 'Explanation: Directing them to security ensures only authorized individuals have access, without compromising your own badge.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'You need to dispose of a printed document containing sensitive information. What is the best way to do this?',
                'reason' => 'Explanation: Shredding sensitive documents ensures that information is properly destroyed and cannot be recovered.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'A colleague asks you to sign in for them on the visitor log since they forgot. What should you do?',
                'reason' => 'Explanation: Directing them to security ensures proper sign-in protocols are followed.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'You notice sensitive files are open on a computer in an empty meeting room. What should you do?',
                'reason' => 'Explanation: Locking the screen protects sensitive information, and informing the user helps reinforce security habits.',
                'category_id' => $workplacesecurityCategoryId,
            ],
            [
                'question_text' => 'You overhear two colleagues discussing sensitive information in the hallway. What’s the best approach?',
                'reason' => 'Explanation: A polite reminder encourages security awareness without escalating unnecessarily.',
                'category_id' => $workplacesecurityCategoryId,
            ],
        ]);
    }
}
