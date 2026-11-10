<?php
/**
 * Title: Page — Industry: Healthcare
 * Slug: cc-modern/page-industry-healthcare
 * Categories: cc-page-starters
 * Block Types: core/post-content
 * Post Types: page
 * Description: Healthcare, med spa, dental and chiropractic landing page with an illustrated ledger hero, reimbursement-focused features, plan fit, client stories, FAQ and consultation form.
 * Keywords: healthcare, medical practice, med spa, dental, industry, landing page, full page
 * Viewport Width: 1400
 *
 * @package cc-modern
 */

$cc_industry = array(
	'class'    => 'cc-starter-page--healthcare',
	'hero'     => array(
		'eyebrow' => __( 'Medical Practices and Med Spas', 'cc-modern' ),
		'title'   => __( 'Healthy finances, so you can focus on patients.', 'cc-modern' ),
		'lead'    => __( 'Medical practice bookkeeping and bookkeeping for med spas, dental practices, dermatology clinics and chiropractic offices. Your personal team of financial experts keeps your finances in order, not in a pile of paperwork.', 'cc-modern' ),
		'trust'   => __( 'Most practices are onboarded and running smoothly within 1 to 2 weeks.', 'cc-modern' ),
		'image'   => 'industry-healthcare.svg',
		'alt'     => '',
	),
	'trust'    => array(
		__( 'Trusted by clinics, medical practices and healthcare firms nationwide', 'cc-modern' ),
		__( 'U.S.-based team', 'cc-modern' ),
		__( 'A personal team of financial experts on every account', 'cc-modern' ),
		__( 'HIPAA-level security', 'cc-modern' ),
	),
	'problem'  => array(
		'title'        => __( 'Patient care comes first. The books still have to get done.', 'cc-modern' ),
		'p1'           => __( 'Running a medical practice, med spa, dental office, dermatology clinic or chiropractic practice means juggling patient care, insurance reimbursements, compliance requirements and overhead, all while keeping your finances in order.', 'cc-modern' ),
		'p2'           => __( "Insurance companies pay slowly. Claims get denied and need follow-up. Equipment, supplies and repairs add up. When the books fall behind, it gets hard to see what's coming in, what's still owed and whether you can cover next month.", 'cc-modern' ),
		'callout_lead' => __( 'Complete Controller handles the bookkeeping so you can stay with your patients.', 'cc-modern' ),
		'callout_body' => __( 'Your team posts and reconciles information from your medical billing provider, keeps receivables represented accurately on the balance sheet and monitors practice expenses.', 'cc-modern' ),
	),
	'features' => array(
		'title' => __( 'Bookkeeping that fits the way practices run.', 'cc-modern' ),
		'items' => array(
			array(
				'icon'  => 'chart',
				'title' => __( 'Medical billing report reconciliation', 'cc-modern' ),
				'copy'  => __( 'We post and reconcile data from your billing company reports so reimbursements and receivables are represented accurately in your books and on the balance sheet.', 'cc-modern' ),
			),
			array(
				'icon'  => 'sheet',
				'title' => __( 'Bookkeeping alongside your billing provider', 'cc-modern' ),
				'copy'  => __( 'Your medical billing provider handles patient billing, claims and collections. We use their reports to record and reconcile the financial activity in your books.', 'cc-modern' ),
			),
			array(
				'icon'  => 'box',
				'title' => __( 'Expense monitoring', 'cc-modern' ),
				'copy'  => __( 'Spending on equipment, supplies and repairs tracked and categorized, so overhead never surprises you.', 'cc-modern' ),
			),
			array(
				'icon'  => 'cash',
				'title' => __( 'Reporting for multi-partner practices', 'cc-modern' ),
				'copy'  => __( 'Premier and Deluxe support practices that need to track earnings and costs for multiple partners. Ask us to scope the reporting around your ownership structure.', 'cc-modern' ),
			),
			array(
				'icon'  => 'lock',
				'title' => __( 'Audit-ready compliance and reporting', 'cc-modern' ),
				'copy'  => __( 'Processes designed to meet audit-ready standards for healthcare practices, with data encrypted and strict access controls.', 'cc-modern' ),
			),
			array(
				'icon'  => 'cloud',
				'title' => __( 'Works with your practice software', 'cc-modern' ),
				'copy'  => __( 'We work with QuickBooks, practice management and claim-handling systems to keep disruption to a minimum.', 'cc-modern' ),
			),
		),
	),
	'team'     => array(
		'title'            => __( 'Your personal team of financial experts who know healthcare.', 'cc-modern' ),
		'statement_before' => __( 'Clean books and steady cash flow, so your practice can ', 'cc-modern' ),
		'statement_accent' => __( 'focus on patients.', 'cc-modern' ),
		'intro'            => __( 'Every Complete Controller account comes with a Controller who oversees your numbers, a Bookkeeper who keeps them current, and CAS-i, our AI, so you can check on the practice between conversations.', 'cc-modern' ),
		'tiles'            => array(
			array(
				'label' => __( 'Your Controller', 'cc-modern' ),
				'title' => __( 'Oversight that supports practice growth.', 'cc-modern' ),
				'body'  => __( 'Reviews your financial reports, keeps records audit-ready and checks that information from billing providers is reflected accurately in your books. Premier and Deluxe can support multi-partner earnings and cost reporting.', 'cc-modern' ),
			),
			array(
				'label' => __( 'Your Bookkeeper', 'cc-modern' ),
				'title' => __( 'Keeps your books current.', 'cc-modern' ),
				'body'  => __( 'Posts reimbursements and payments from medical billing company reports, records practice expenses and reconciles accounts and balance-sheet receivables.', 'cc-modern' ),
			),
			array(
				'label' => __( 'CAS-i, Your AI', 'cc-modern' ),
				'title' => __( 'Numbers that make sense, any time you ask.', 'cc-modern' ),
				'body'  => __( 'Ask questions about revenue, expenses or receivables in plain language and get clear answers that help you decide what to do next. CAS-i explains your numbers and never changes your books.', 'cc-modern' ),
			),
		),
	),
	'steps'    => array(
		array(
			'title' => __( 'Book a free consultation', 'cc-modern' ),
			'copy'  => __( "Tell us about your practice and current setup. We'll recommend the right level of support and give you a clear price.", 'cc-modern' ),
		),
		array(
			'title' => __( 'We set up and connect', 'cc-modern' ),
			'copy'  => __( 'We connect your existing tools and get your books in order. Most practices are onboarded within 1 to 2 weeks.', 'cc-modern' ),
		),
		array(
			'title' => __( 'Clear numbers every month', 'cc-modern' ),
			'copy'  => __( 'Your Bookkeeper keeps everything current, your Controller sends reports that show where the practice stands, and CAS-i answers questions in between.', 'cc-modern' ),
		),
	),
	'asks'     => array(
		__( 'What is our current accounts receivable balance?', 'cc-modern' ),
		__( 'What did we spend on supplies last month?', 'cc-modern' ),
		__( 'How did revenue this quarter compare with last quarter?', 'cc-modern' ),
	),
	'plans'    => array(
		'title' => __( 'Support for single-location and multi-partner practices.', 'cc-modern' ),
		'intro' => __( 'Basic and Complete support routine practice bookkeeping. Practices that need to track earnings and costs for multiple partners should ask about Premier or Deluxe.', 'cc-modern' ),
		'items' => array(
			array(
				'tag'      => __( 'Single locations', 'cc-modern' ),
				'name'     => __( 'Basic', 'cc-modern' ),
				'price'    => '$405',
				'period'   => ' / month',
				'setup'    => __( 'One-time setup: $1,450', 'cc-modern' ),
				'fit'      => __( 'single-location practices, med spas and clinics.', 'cc-modern' ),
				'features' => array( __( 'Monthly bookkeeping', 'cc-modern' ), __( 'Full report package', 'cc-modern' ), __( 'Your Controller, Bookkeeper and CAS-i', 'cc-modern' ) ),
			),
			array(
				'tag'      => __( 'Growing practices', 'cc-modern' ),
				'name'     => __( 'Complete', 'cc-modern' ),
				'price'    => '$970',
				'period'   => ' / month',
				'setup'    => __( 'One-time setup: $1,650', 'cc-modern' ),
				'fit'      => __( 'practices with more than one location, or with investors or lenders who expect regular reports.', 'cc-modern' ),
				'features' => array( __( 'Weekly bookkeeping', 'cc-modern' ), __( 'Custom report package', 'cc-modern' ), __( 'Audit ready', 'cc-modern' ), __( 'Your Controller, Bookkeeper and CAS-i', 'cc-modern' ) ),
				'pick'     => true,
			),
		),
		'note'  => __( 'Each plan has a one-time setup fee to get your books ready. Premier and Deluxe are suited to complex practices that need earnings and cost reporting for multiple partners. Ask us to recommend the right package. Have internal accounting staff? Our oversight services can support and review their work.', 'cc-modern' ),
	),
	'quotes'   => array(
		'title'    => __( 'What Practice Owners Say', 'cc-modern' ),
		'featured' => false,
		'items'    => array(
			array(
				'text' => __( 'Thank you Ladies for all your help. My Bookkeeper has been very helpful in educating me on how to best explain all the details of my financial reports. Complete Controller does a great job and I am now confident about my bookkeeping and reporting. I appreciate all your support!', 'cc-modern' ),
				'name' => 'Dr. Heba Farag',
				'role' => 'Medical Practice Owner',
			),
			array(
				'text' => __( "I am very happy with my services and my accounting team. You do a great job with my accounting and I'm very appreciative.", 'cc-modern' ),
				'name' => 'Doctor Tu',
				'role' => 'President, Humane Care Medical Group',
			),
		),
	),
	'faq'      => array(
		'title' => __( 'What practice owners ask us.', 'cc-modern' ),
		'items' => array(
			array(
				'q' => __( 'How much does bookkeeping for a medical practice cost?', 'cc-modern' ),
				'a' => __( "Most single-location practices fit Basic at $405 a month. Practices with more than one location, or with investors or lenders, usually fit Complete at $970 a month. Each plan has a one-time setup fee, and you'll know the price before you commit.", 'cc-modern' ),
			),
			array(
				'q' => __( 'Can you help track reimbursement delays from insurance companies?', 'cc-modern' ),
				'a' => __( 'We post and reconcile your medical billing company reports so reimbursements and outstanding receivables are accurately reflected in your books. Your billing provider manages claim follow-up and collections.', 'cc-modern' ),
			),
			array(
				'q' => __( 'Can you help with patient billing and revenue cycle management?', 'cc-modern' ),
				'a' => __( 'We do not provide medical billing, submit claims or manage collections. We post and reconcile information from your medical billing provider so those activities are represented accurately in your books and on the balance sheet.', 'cc-modern' ),
			),
			array(
				'q' => __( 'Can you report on earnings and costs for multiple partners?', 'cc-modern' ),
				'a' => __( 'Yes. Our Premier and Deluxe packages support complex practices that need to track earnings and costs for multiple partners. We discuss your ownership structure and reporting needs during the consultation.', 'cc-modern' ),
			),
			array(
				'q' => __( 'Do you work with our practice management and billing software?', 'cc-modern' ),
				'a' => __( "Yes. We work with your existing tools, whether that's QuickBooks, practice management or claim-handling systems, to keep disruption to a minimum.", 'cc-modern' ),
			),
			array(
				'q' => __( 'Is our patient and financial data safe?', 'cc-modern' ),
				'a' => __( 'Yes. Our systems are cloud-based and encrypted, with strict access controls, and our processes are designed to meet audit-ready standards for healthcare practices.', 'cc-modern' ),
			),
			array(
				'q' => __( 'We already have internal accounting staff. Can you support or review their work?', 'cc-modern' ),
				'a' => __( 'Yes. Many healthcare clients use our oversight services to catch errors, tighten financial controls and check billing accuracy.', 'cc-modern' ),
			),
			array(
				'q' => __( 'How quickly can we get set up?', 'cc-modern' ),
				'a' => __( 'Most practices are onboarded and running smoothly within 1 to 2 weeks, depending on size and complexity.', 'cc-modern' ),
			),
		),
	),
);

echo cc_modern_render_industry_page( $cc_industry ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
unset( $cc_industry );
