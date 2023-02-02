<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05fd3d3524c908d769a0ea2167dff389
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MailchimpTests\\' => 15,
            'MailchimpAPI\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MailchimpTests\\' => 
        array (
            0 => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests',
        ),
        'MailchimpAPI\\' => 
        array (
            0 => __DIR__ . '/..' . '/jhut89/mailchimp3php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'MailchimpAPI\\Mailchimp' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Mailchimp.php',
        'MailchimpAPI\\MailchimpException' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/MailchimpException.php',
        'MailchimpAPI\\Requests\\HttpRequest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Requests/HttpRequest.php',
        'MailchimpAPI\\Requests\\MailchimpConnection' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Requests/MailchimpConnection.php',
        'MailchimpAPI\\Requests\\MailchimpRequest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Requests/MailchimpRequest.php',
        'MailchimpAPI\\Resources\\Account' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Account.php',
        'MailchimpAPI\\Resources\\ApiResource' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/ApiResource.php',
        'MailchimpAPI\\Resources\\AuthorizedApps' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/AuthorizedApps.php',
        'MailchimpAPI\\Resources\\Automations' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Automations.php',
        'MailchimpAPI\\Resources\\Automations\\Emails' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Automations/Emails.php',
        'MailchimpAPI\\Resources\\Automations\\Emails\\Queue' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Automations/Emails/Queue.php',
        'MailchimpAPI\\Resources\\Automations\\RemovedSubscribers' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Automations/RemovedSubscribers.php',
        'MailchimpAPI\\Resources\\BatchOperations' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/BatchOperations.php',
        'MailchimpAPI\\Resources\\BatchWebhooks' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/BatchWebhooks.php',
        'MailchimpAPI\\Resources\\CampaignFolders' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/CampaignFolders.php',
        'MailchimpAPI\\Resources\\Campaigns' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Campaigns.php',
        'MailchimpAPI\\Resources\\Campaigns\\Content' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Campaigns/Content.php',
        'MailchimpAPI\\Resources\\Campaigns\\Feedback' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Campaigns/Feedback.php',
        'MailchimpAPI\\Resources\\Campaigns\\SendChecklist' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Campaigns/SendChecklist.php',
        'MailchimpAPI\\Resources\\ConnectedSites' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/ConnectedSites.php',
        'MailchimpAPI\\Resources\\Conversations' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Conversations.php',
        'MailchimpAPI\\Resources\\Conversations\\Messages' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Conversations/Messages.php',
        'MailchimpAPI\\Resources\\EcommerceStores' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/EcommerceStores.php',
        'MailchimpAPI\\Resources\\EcommerceStores\\Carts' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/EcommerceStores/Carts.php',
        'MailchimpAPI\\Resources\\EcommerceStores\\Carts\\Lines' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/EcommerceStores/Carts/Lines.php',
        'MailchimpAPI\\Resources\\EcommerceStores\\Customers' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/EcommerceStores/Customers.php',
        'MailchimpAPI\\Resources\\EcommerceStores\\Orders' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/EcommerceStores/Orders.php',
        'MailchimpAPI\\Resources\\EcommerceStores\\Orders\\Lines' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/EcommerceStores/Orders/Lines.php',
        'MailchimpAPI\\Resources\\EcommerceStores\\Products' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/EcommerceStores/Products.php',
        'MailchimpAPI\\Resources\\EcommerceStores\\Products\\Images' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/EcommerceStores/Products/Images.php',
        'MailchimpAPI\\Resources\\EcommerceStores\\Products\\Variants' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/EcommerceStores/Products/Variants.php',
        'MailchimpAPI\\Resources\\EcommerceStores\\PromoRules' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/EcommerceStores/PromoRules.php',
        'MailchimpAPI\\Resources\\EcommerceStores\\PromoRules\\PromoCodes' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/EcommerceStores/PromoRules/PromoCodes.php',
        'MailchimpAPI\\Resources\\FacebookAds' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/FacebookAds.php',
        'MailchimpAPI\\Resources\\FileManagerFiles' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/FileManagerFiles.php',
        'MailchimpAPI\\Resources\\FileManagerFolders' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/FileManagerFolders.php',
        'MailchimpAPI\\Resources\\GoogleAds' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/GoogleAds.php',
        'MailchimpAPI\\Resources\\LandingPages' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/LandingPages.php',
        'MailchimpAPI\\Resources\\LandingPages\\Content' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/LandingPages/Content.php',
        'MailchimpAPI\\Resources\\Lists' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists.php',
        'MailchimpAPI\\Resources\\Lists\\AbuseReports' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/AbuseReports.php',
        'MailchimpAPI\\Resources\\Lists\\Activity' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/Activity.php',
        'MailchimpAPI\\Resources\\Lists\\Clients' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/Clients.php',
        'MailchimpAPI\\Resources\\Lists\\GrowthHistory' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/GrowthHistory.php',
        'MailchimpAPI\\Resources\\Lists\\InterestCategories' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/InterestCategories.php',
        'MailchimpAPI\\Resources\\Lists\\InterestCategories\\Interest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/InterestCategories/Interest.php',
        'MailchimpAPI\\Resources\\Lists\\Members' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/Members.php',
        'MailchimpAPI\\Resources\\Lists\\Members\\Activity' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/Members/Activity.php',
        'MailchimpAPI\\Resources\\Lists\\Members\\Events' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/Members/Events.php',
        'MailchimpAPI\\Resources\\Lists\\Members\\Goals' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/Members/Goals.php',
        'MailchimpAPI\\Resources\\Lists\\Members\\Notes' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/Members/Notes.php',
        'MailchimpAPI\\Resources\\Lists\\Members\\Tags' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/Members/Tags.php',
        'MailchimpAPI\\Resources\\Lists\\MergeFields' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/MergeFields.php',
        'MailchimpAPI\\Resources\\Lists\\Segments' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/Segments.php',
        'MailchimpAPI\\Resources\\Lists\\Segments\\Members' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/Segments/Members.php',
        'MailchimpAPI\\Resources\\Lists\\SignupForms' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/SignupForms.php',
        'MailchimpAPI\\Resources\\Lists\\Webhooks' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Lists/Webhooks.php',
        'MailchimpAPI\\Resources\\Ping' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Ping.php',
        'MailchimpAPI\\Resources\\Reports' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Reports.php',
        'MailchimpAPI\\Resources\\Reports\\CampaignAbuse' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Reports/CampaignAbuse.php',
        'MailchimpAPI\\Resources\\Reports\\CampaignAdvice' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Reports/CampaignAdvice.php',
        'MailchimpAPI\\Resources\\Reports\\ClickReports' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Reports/ClickReports.php',
        'MailchimpAPI\\Resources\\Reports\\ClickReports\\Members' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Reports/ClickReports/Members.php',
        'MailchimpAPI\\Resources\\Reports\\DomainPerformance' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Reports/DomainPerformance.php',
        'MailchimpAPI\\Resources\\Reports\\EepurlReports' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Reports/EepurlReports.php',
        'MailchimpAPI\\Resources\\Reports\\EmailActivity' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Reports/EmailActivity.php',
        'MailchimpAPI\\Resources\\Reports\\GoogleAnalytics' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Reports/GoogleAnalytics.php',
        'MailchimpAPI\\Resources\\Reports\\OpenDetails' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Reports/OpenDetails.php',
        'MailchimpAPI\\Resources\\Reports\\SentTo' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Reports/SentTo.php',
        'MailchimpAPI\\Resources\\Reports\\SubReports' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Reports/SubReports.php',
        'MailchimpAPI\\Resources\\Reports\\TopLocations' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Reports/TopLocations.php',
        'MailchimpAPI\\Resources\\Reports\\Unsubscribes' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Reports/Unsubscribes.php',
        'MailchimpAPI\\Resources\\SearchCampaigns' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/SearchCampaigns.php',
        'MailchimpAPI\\Resources\\SearchMembers' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/SearchMembers.php',
        'MailchimpAPI\\Resources\\TemplateFolders' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/TemplateFolders.php',
        'MailchimpAPI\\Resources\\Templates' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Templates.php',
        'MailchimpAPI\\Resources\\Templates\\DefaultContent' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/Templates/DefaultContent.php',
        'MailchimpAPI\\Resources\\VerifiedDomains' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Resources/VerifiedDomains.php',
        'MailchimpAPI\\Responses\\FailureResponse' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Responses/FailureResponse.php',
        'MailchimpAPI\\Responses\\MailchimpResponse' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Responses/MailchimpResponse.php',
        'MailchimpAPI\\Responses\\SuccessResponse' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Responses/SuccessResponse.php',
        'MailchimpAPI\\Settings\\MailchimpSettings' => __DIR__ . '/..' . '/jhut89/mailchimp3php/src/Settings/MailchimpSettings.php',
        'MailchimpTests\\AccountTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/AccountTest.php',
        'MailchimpTests\\AuthorizedAppsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/AuthorizedAppsTest.php',
        'MailchimpTests\\AutomationsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/AutomationsTest.php',
        'MailchimpTests\\Automations\\EmailsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Automations/EmailsTest.php',
        'MailchimpTests\\Automations\\Emails\\QueueTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Automations/Emails/QueueTest.php',
        'MailchimpTests\\Automations\\RemovedSubscribersTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Automations/RemovedSubscribersTest.php',
        'MailchimpTests\\BatchOperationsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/BatchOperationsTest.php',
        'MailchimpTests\\BatchWebhooksTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/BatchWebhooksTest.php',
        'MailchimpTests\\CampaignFoldersTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/CampaignFoldersTest.php',
        'MailchimpTests\\CampaignsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/CampaignsTest.php',
        'MailchimpTests\\Campaigns\\ContentTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Campaigns/ContentTest.php',
        'MailchimpTests\\Campaigns\\FeedbackTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Campaigns/FeedbackTest.php',
        'MailchimpTests\\Campaigns\\SendChecklistTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Campaigns/SendChecklistTest.php',
        'MailchimpTests\\ConnectedSitesTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/ConnectedSitesTest.php',
        'MailchimpTests\\ConversationsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/ConversationsTest.php',
        'MailchimpTests\\Conversations\\MessagesTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Conversations/MessagesTest.php',
        'MailchimpTests\\EcommerceStoresTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/EcommerceStoresTest.php',
        'MailchimpTests\\EcommerceStores\\CartsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/EcommerceStores/CartsTest.php',
        'MailchimpTests\\EcommerceStores\\Carts\\LinesTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/EcommerceStores/Carts/LinesTest.php',
        'MailchimpTests\\EcommerceStores\\CustomersTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/EcommerceStores/CustomersTest.php',
        'MailchimpTests\\EcommerceStores\\OrdersTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/EcommerceStores/OrdersTest.php',
        'MailchimpTests\\EcommerceStores\\Orders\\LinesTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/EcommerceStores/Orders/LinesTest.php',
        'MailchimpTests\\EcommerceStores\\ProductsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/EcommerceStores/ProductsTest.php',
        'MailchimpTests\\EcommerceStores\\Products\\ImagesTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/EcommerceStores/Products/ImagesTest.php',
        'MailchimpTests\\EcommerceStores\\Products\\VariantsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/EcommerceStores/Products/VariantsTest.php',
        'MailchimpTests\\EcommerceStores\\PromoRulesTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/EcommerceStores/PromoRulesTest.php',
        'MailchimpTests\\EcommerceStores\\PromoRules\\PromoCodesTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/EcommerceStores/PromoRules/PromoCodesTest.php',
        'MailchimpTests\\FacebookAdsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/FacebookAdsTest.php',
        'MailchimpTests\\FileManagerFilesTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/FileManagerFilesTest.php',
        'MailchimpTests\\FileManagerFoldersTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/FileManagerFoldersTest.php',
        'MailchimpTests\\GoogleAdsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/GoogleAdsTest.php',
        'MailchimpTests\\LandingPagesTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/LandingPagesTest.php',
        'MailchimpTests\\LandingPages\\ContentTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/LandingPages/ContentTest.php',
        'MailchimpTests\\ListsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/ListsTest.php',
        'MailchimpTests\\Lists\\AbuseReportsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/AbuseReportsTest.php',
        'MailchimpTests\\Lists\\ActivityTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/ActivityTest.php',
        'MailchimpTests\\Lists\\ClientsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/ClientsTest.php',
        'MailchimpTests\\Lists\\GrowthHistoryTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/GrowthHistoryTest.php',
        'MailchimpTests\\Lists\\InterestCategoriesTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/InterestCategoriesTest.php',
        'MailchimpTests\\Lists\\InterestCategories\\InterestsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/InterestCategories/InterestsTest.php',
        'MailchimpTests\\Lists\\MembersTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/MembersTest.php',
        'MailchimpTests\\Lists\\Members\\ActivityTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/Members/ActivityTest.php',
        'MailchimpTests\\Lists\\Members\\EventsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/Members/EventsTest.php',
        'MailchimpTests\\Lists\\Members\\GoalsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/Members/GoalsTest.php',
        'MailchimpTests\\Lists\\Members\\NotesTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/Members/NotesTest.php',
        'MailchimpTests\\Lists\\Members\\TagsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/Members/TagsTest.php',
        'MailchimpTests\\Lists\\MergeFieldsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/MergeFieldsTest.php',
        'MailchimpTests\\Lists\\SegmentsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/SegmentsTest.php',
        'MailchimpTests\\Lists\\Segments\\MembersTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/Segments/MembersTest.php',
        'MailchimpTests\\Lists\\SignupFormsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/SignupFormsTest.php',
        'MailchimpTests\\Lists\\WebhooksTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Lists/WebhooksTest.php',
        'MailchimpTests\\MailChimpTestCase' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/MailChimpTestCase.php',
        'MailchimpTests\\MailchimpTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/MailchimpTest.php',
        'MailchimpTests\\PingTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/PingTest.php',
        'MailchimpTests\\ReportsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/ReportsTest.php',
        'MailchimpTests\\Reports\\CampaignAbuseTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Reports/CampaignAbuseTest.php',
        'MailchimpTests\\Reports\\CampaignAdviceTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Reports/CampaignAdviceTest.php',
        'MailchimpTests\\Reports\\ClickReportsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Reports/ClickReportsTest.php',
        'MailchimpTests\\Reports\\ClickReports\\MembersTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Reports/ClickReports/MembersTest.php',
        'MailchimpTests\\Reports\\DomainPerformanceTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Reports/DomainPerformanceTest.php',
        'MailchimpTests\\Reports\\EepurlReportsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Reports/EepurlReportsTest.php',
        'MailchimpTests\\Reports\\EmailActivityTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Reports/EmailActivityTest.php',
        'MailchimpTests\\Reports\\GoogleAnalyticsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Reports/GoogleAnalyticsTest.php',
        'MailchimpTests\\Reports\\OpenDetailsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Reports/OpenDetailsTest.php',
        'MailchimpTests\\Reports\\SentToTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Reports/SentToTest.php',
        'MailchimpTests\\Reports\\SubReportsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Reports/SubReportsTest.php',
        'MailchimpTests\\Reports\\TopLocationsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Reports/TopLocationsTest.php',
        'MailchimpTests\\Reports\\UnsubscribesTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Reports/UnsubscribesTest.php',
        'MailchimpTests\\Responses\\FailureResponseTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Responses/FailureResponseTest.php',
        'MailchimpTests\\Responses\\SuccessResponseTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Responses/SuccessResponseTest.php',
        'MailchimpTests\\SearchCampaignsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/SearchCampaignsTest.php',
        'MailchimpTests\\SearchMembersTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/SearchMembersTest.php',
        'MailchimpTests\\Settings\\MailchimpSettingsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Settings/MailchimpSettingsTest.php',
        'MailchimpTests\\TemplateFoldersTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/TemplateFoldersTest.php',
        'MailchimpTests\\TemplatesTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/TemplatesTest.php',
        'MailchimpTests\\Templates\\DefaultContentTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/Templates/DefaultContentTest.php',
        'MailchimpTests\\TestingUtilities\\StubbableMailchimp' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/TestingUtilities/StubbableMailchimp.php',
        'MailchimpTests\\UtilityTests\\MailchimpConnectionTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/UtilityTests/MailchimpConnectionTest.php',
        'MailchimpTests\\UtilityTests\\MailchimpRequestTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/UtilityTests/MailchimpRequestTest.php',
        'MailchimpTests\\VerifiedDomainsTest' => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests/VerifiedDomainsTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05fd3d3524c908d769a0ea2167dff389::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05fd3d3524c908d769a0ea2167dff389::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit05fd3d3524c908d769a0ea2167dff389::$classMap;

        }, null, ClassLoader::class);
    }
}
