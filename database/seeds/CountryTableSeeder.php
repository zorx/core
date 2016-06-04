<?php

use Illuminate\Database\Seeder;
use ZEDx\Models\Country;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = $this->getCountries();
        Country::insert($countries);
    }

    protected function getCountries()
    {
        return [
        ['code' => 'AF', 'en' => 'Afghanistan', 'is_activate' => 0, 'currency' => 'AFA'],
        ['code' => 'ZA', 'en' => 'South Africa', 'is_activate' => 0, 'currency' => 'ZAR'],
        ['code' => 'AL', 'en' => 'Albania', 'is_activate' => 0, 'currency' => 'ALL'],
        ['code' => 'DZ', 'en' => 'Algeria', 'is_activate' => 1, 'currency' => 'DZD'],
        ['code' => 'DE', 'en' => 'Germany', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'AD', 'en' => 'Andorra', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'AO', 'en' => 'Angola', 'is_activate' => 0, 'currency' => 'AON'],
        ['code' => 'AI', 'en' => 'Anguilla', 'is_activate' => 0, 'currency' => 'XCD'],
        ['code' => 'AQ', 'en' => 'Antarctica', 'is_activate' => 0, 'currency' => 'AQD'],
        ['code' => 'AG', 'en' => 'Antigua & Barbuda', 'is_activate' => 0, 'currency' => 'XCD'],
        ['code' => 'AN', 'en' => 'Netherlands Antilles', 'is_activate' => 0, 'currency' => 'ANG'],
        ['code' => 'SA', 'en' => 'Saudi Arabia', 'is_activate' => 0, 'currency' => 'SAR'],
        ['code' => 'AR', 'en' => 'Argentina', 'is_activate' => 0, 'currency' => 'ARS'],
        ['code' => 'AM', 'en' => 'Armenia', 'is_activate' => 0, 'currency' => 'AMD'],
        ['code' => 'AW', 'en' => 'Aruba', 'is_activate' => 0, 'currency' => 'AWG'],
        ['code' => 'AU', 'en' => 'Australia', 'is_activate' => 0, 'currency' => 'AUD'],
        ['code' => 'AT', 'en' => 'Austria', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'AZ', 'en' => 'Azerbaijan', 'is_activate' => 0, 'currency' => 'AZM'],
        ['code' => 'BJ', 'en' => 'Benin', 'is_activate' => 0, 'currency' => 'XOF'],
        ['code' => 'BS', 'en' => 'Bahamas, The', 'is_activate' => 0, 'currency' => 'BSD'],
        ['code' => 'BH', 'en' => 'Bahrain', 'is_activate' => 0, 'currency' => 'BHD'],
        ['code' => 'BD', 'en' => 'Bangladesh', 'is_activate' => 0, 'currency' => 'BDT'],
        ['code' => 'BB', 'en' => 'Barbados', 'is_activate' => 0, 'currency' => 'BBD'],
        ['code' => 'PW', 'en' => 'Palau', 'is_activate' => 0, 'currency' => 'USD'],
        ['code' => 'BE', 'en' => 'Belgium', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'BZ', 'en' => 'Belize', 'is_activate' => 0, 'currency' => 'BZD'],
        ['code' => 'BM', 'en' => 'Bermuda', 'is_activate' => 0, 'currency' => 'BMD'],
        ['code' => 'BT', 'en' => 'Bhutan', 'is_activate' => 0, 'currency' => 'BTN'],
        ['code' => 'BY', 'en' => 'Belarus', 'is_activate' => 0, 'currency' => 'BYR'],
        ['code' => 'MM', 'en' => 'Myanmar (ex-Burma)', 'is_activate' => 0, 'currency' => 'MMK'],
        ['code' => 'BO', 'en' => 'Bolivia', 'is_activate' => 0, 'currency' => 'BOB'],
        ['code' => 'BA', 'en' => 'Bosnia and Herzegovina', 'is_activate' => 0, 'currency' => 'BAM'],
        ['code' => 'BW', 'en' => 'Botswana', 'is_activate' => 0, 'currency' => 'BWP'],
        ['code' => 'BR', 'en' => 'Brazil', 'is_activate' => 0, 'currency' => 'BRL'],
        ['code' => 'BN', 'en' => 'Brunei Darussalam', 'is_activate' => 0, 'currency' => 'BND'],
        ['code' => 'BG', 'en' => 'Bulgaria', 'is_activate' => 0, 'currency' => 'BGL'],
        ['code' => 'BF', 'en' => 'Burkina Faso', 'is_activate' => 0, 'currency' => 'XOF'],
        ['code' => 'BI', 'en' => 'Burundi', 'is_activate' => 0, 'currency' => 'BIF'],
        ['code' => 'CI', 'en' => 'Ivory Coast (see Cote d\'Ivoire)', 'is_activate' => 0, 'currency' => 'XOF'],
        ['code' => 'KH', 'en' => 'Cambodia', 'is_activate' => 0, 'currency' => 'KHR'],
        ['code' => 'CM', 'en' => 'Cameroon', 'is_activate' => 0, 'currency' => 'XAF'],
        ['code' => 'CA', 'en' => 'Canada', 'is_activate' => 0, 'currency' => 'CAD'],
        ['code' => 'CV', 'en' => 'Cape Verde', 'is_activate' => 0, 'currency' => 'CVE'],
        ['code' => 'CL', 'en' => 'Chile', 'is_activate' => 0, 'currency' => 'CLP'],
        ['code' => 'CN', 'en' => 'China', 'is_activate' => 0, 'currency' => 'CNY'],
        ['code' => 'CY', 'en' => 'Cyprus', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'CO', 'en' => 'Colombia', 'is_activate' => 0, 'currency' => 'COP'],
        ['code' => 'KM', 'en' => 'Comoros', 'is_activate' => 0, 'currency' => 'KMF'],
        ['code' => 'CG', 'en' => 'Congo', 'is_activate' => 0, 'currency' => 'XAF'],
        ['code' => 'KP', 'en' => 'Korea, Demo. People\'s Rep. of', 'is_activate' => 0, 'currency' => 'KPW'],
        ['code' => 'KR', 'en' => 'Korea, (South) Republic of', 'is_activate' => 0, 'currency' => 'KRW'],
        ['code' => 'CR', 'en' => 'Costa Rica', 'is_activate' => 0, 'currency' => 'CRC'],
        ['code' => 'HR', 'en' => 'Croatia', 'is_activate' => 0, 'currency' => 'HRK'],
        ['code' => 'CU', 'en' => 'Cuba', 'is_activate' => 0, 'currency' => 'CUP'],
        ['code' => 'DK', 'en' => 'Denmark', 'is_activate' => 0, 'currency' => 'DKK'],
        ['code' => 'DJ', 'en' => 'Djibouti', 'is_activate' => 0, 'currency' => 'DJF'],
        ['code' => 'DM', 'en' => 'Dominica', 'is_activate' => 0, 'currency' => 'XCD'],
        ['code' => 'EG', 'en' => 'Egypt', 'is_activate' => 0, 'currency' => 'EGP'],
        ['code' => 'AE', 'en' => 'United Arab Emirates', 'is_activate' => 0, 'currency' => 'AED'],
        ['code' => 'EC', 'en' => 'Ecuador', 'is_activate' => 0, 'currency' => 'ECS'],
        ['code' => 'ER', 'en' => 'Eritrea', 'is_activate' => 0, 'currency' => 'ERN'],
        ['code' => 'ES', 'en' => 'Spain', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'EE', 'en' => 'Estonia', 'is_activate' => 0, 'currency' => 'EEK'],
        ['code' => 'US', 'en' => 'United States', 'is_activate' => 0, 'currency' => 'USD'],
        ['code' => 'ET', 'en' => 'Ethiopia', 'is_activate' => 0, 'currency' => 'ETB'],
        ['code' => 'FI', 'en' => 'Finland', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'FR', 'en' => 'France', 'is_activate' => 1, 'currency' => 'EUR'],
        ['code' => 'GE', 'en' => 'Georgia', 'is_activate' => 0, 'currency' => 'GEL'],
        ['code' => 'GA', 'en' => 'Gabon', 'is_activate' => 0, 'currency' => 'XAF'],
        ['code' => 'GM', 'en' => 'Gambia, the', 'is_activate' => 0, 'currency' => 'GMD'],
        ['code' => 'GH', 'en' => 'Ghana', 'is_activate' => 0, 'currency' => 'GHC'],
        ['code' => 'GI', 'en' => 'Gibraltar', 'is_activate' => 0, 'currency' => 'GIP'],
        ['code' => 'GR', 'en' => 'Greece', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'GD', 'en' => 'Grenada', 'is_activate' => 0, 'currency' => 'XCD'],
        ['code' => 'GL', 'en' => 'Greenland', 'is_activate' => 0, 'currency' => 'DKK'],
        ['code' => 'GP', 'en' => 'Guinea, Equatorial', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'GU', 'en' => 'Guam', 'is_activate' => 0, 'currency' => 'USD'],
        ['code' => 'GT', 'en' => 'Guatemala', 'is_activate' => 0, 'currency' => 'GTQ'],
        ['code' => 'GN', 'en' => 'Guinea', 'is_activate' => 0, 'currency' => 'GNF'],
        ['code' => 'GQ', 'en' => 'Equatorial Guinea', 'is_activate' => 0, 'currency' => 'XAF'],
        ['code' => 'GW', 'en' => 'Guinea-Bissau', 'is_activate' => 0, 'currency' => 'XAF'],
        ['code' => 'GY', 'en' => 'Guyana', 'is_activate' => 0, 'currency' => 'GYD'],
        ['code' => 'GF', 'en' => 'Guiana, French', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'HT', 'en' => 'Haiti', 'is_activate' => 0, 'currency' => 'HTG'],
        ['code' => 'HN', 'en' => 'Honduras', 'is_activate' => 0, 'currency' => 'HNL'],
        ['code' => 'HK', 'en' => 'Hong Kong, (China)', 'is_activate' => 0, 'currency' => 'HKD'],
        ['code' => 'HU', 'en' => 'Hungary', 'is_activate' => 0, 'currency' => 'HUF'],
        ['code' => 'BV', 'en' => 'Bouvet Island', 'is_activate' => 0, 'currency' => 'NOK'],
        ['code' => 'CX', 'en' => 'Christmas Island', 'is_activate' => 0, 'currency' => 'AUD'],
        ['code' => 'NF', 'en' => 'Norfolk Island', 'is_activate' => 0, 'currency' => 'AUD'],
        ['code' => 'KY', 'en' => 'Cayman Islands', 'is_activate' => 0, 'currency' => 'KYD'],
        ['code' => 'CK', 'en' => 'Cook Islands', 'is_activate' => 0, 'currency' => 'NZD'],
        ['code' => 'FO', 'en' => 'Faroe Islands', 'is_activate' => 0, 'currency' => 'DKK'],
        ['code' => 'FK', 'en' => 'Falkland Islands (Malvinas)', 'is_activate' => 0, 'currency' => 'FKP'],
        ['code' => 'FJ', 'en' => 'Fiji', 'is_activate' => 0, 'currency' => 'FJD'],
        ['code' => 'GS', 'en' => 'S. Georgia and S. Sandwich Is.', 'is_activate' => 0, 'currency' => 'GBP'],
        ['code' => 'HM', 'en' => 'Heard and McDonald Islands', 'is_activate' => 0, 'currency' => 'AUD'],
        ['code' => 'MH', 'en' => 'Marshall Islands', 'is_activate' => 0, 'currency' => 'USD'],
        ['code' => 'PN', 'en' => 'Pitcairn Island', 'is_activate' => 0, 'currency' => 'NZD'],
        ['code' => 'SB', 'en' => 'Solomon Islands', 'is_activate' => 0, 'currency' => 'SBD'],
        ['code' => 'SJ', 'en' => 'Svalbard and Jan Mayen Islands', 'is_activate' => 0, 'currency' => 'NOK'],
        ['code' => 'TC', 'en' => 'Turks and Caicos Islands', 'is_activate' => 0, 'currency' => 'USD'],
        ['code' => 'VI', 'en' => 'Virgin Islands, U.S.', 'is_activate' => 0, 'currency' => 'USD'],
        ['code' => 'VG', 'en' => 'Virgin Islands, British', 'is_activate' => 0, 'currency' => 'USD'],
        ['code' => 'CC', 'en' => 'Cocos (Keeling) Islands', 'is_activate' => 0, 'currency' => 'AUD'],
        ['code' => 'UM', 'en' => 'US Minor Outlying Islands', 'is_activate' => 0, 'currency' => 'USD'],
        ['code' => 'IN', 'en' => 'India', 'is_activate' => 0, 'currency' => 'INR'],
        ['code' => 'ID', 'en' => 'Indonesia', 'is_activate' => 0, 'currency' => 'IDR'],
        ['code' => 'IR', 'en' => 'Iran, Islamic Republic of', 'is_activate' => 0, 'currency' => 'IRR'],
        ['code' => 'IQ', 'en' => 'Iraq', 'is_activate' => 0, 'currency' => 'IQD'],
        ['code' => 'IE', 'en' => 'Ireland', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'IS', 'en' => 'Iceland', 'is_activate' => 0, 'currency' => 'ISK'],
        ['code' => 'IL', 'en' => 'Israel', 'is_activate' => 0, 'currency' => 'ILS'],
        ['code' => 'IT', 'en' => 'Italy', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'JM', 'en' => 'Jamaica', 'is_activate' => 0, 'currency' => 'JMD'],
        ['code' => 'JP', 'en' => 'Japan', 'is_activate' => 0, 'currency' => 'JPY'],
        ['code' => 'JO', 'en' => 'Jordan', 'is_activate' => 0, 'currency' => 'JOD'],
        ['code' => 'KZ', 'en' => 'Kazakhstan', 'is_activate' => 0, 'currency' => 'KZT'],
        ['code' => 'KE', 'en' => 'Kenya', 'is_activate' => 0, 'currency' => 'KES'],
        ['code' => 'KG', 'en' => 'Kyrgyzstan', 'is_activate' => 0, 'currency' => 'KGS'],
        ['code' => 'KI', 'en' => 'Kiribati', 'is_activate' => 0, 'currency' => 'AUD'],
        ['code' => 'KW', 'en' => 'Kuwait', 'is_activate' => 0, 'currency' => 'KWD'],
        ['code' => 'LA', 'en' => 'Lao People\'s Democratic Republic', 'is_activate' => 0, 'currency' => 'LAK'],
        ['code' => 'LS', 'en' => 'Lesotho', 'is_activate' => 0, 'currency' => 'LSL'],
        ['code' => 'LV', 'en' => 'Latvia', 'is_activate' => 0, 'currency' => 'LVL'],
        ['code' => 'LB', 'en' => 'Lebanon', 'is_activate' => 0, 'currency' => 'LBP'],
        ['code' => 'LR', 'en' => 'Liberia', 'is_activate' => 0, 'currency' => 'LRD'],
        ['code' => 'LY', 'en' => 'Libyan Arab Jamahiriya', 'is_activate' => 0, 'currency' => 'LYD'],
        ['code' => 'LI', 'en' => 'Liechtenstein', 'is_activate' => 0, 'currency' => 'CHF'],
        ['code' => 'LT', 'en' => 'Lithuania', 'is_activate' => 0, 'currency' => 'LTL'],
        ['code' => 'LU', 'en' => 'Luxembourg', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'MO', 'en' => 'Macao, (China)', 'is_activate' => 0, 'currency' => 'MOP'],
        ['code' => 'MG', 'en' => 'Madagascar', 'is_activate' => 0, 'currency' => 'MGF'],
        ['code' => 'MY', 'en' => 'Malaysia', 'is_activate' => 0, 'currency' => 'MYR'],
        ['code' => 'MW', 'en' => 'Malawi', 'is_activate' => 0, 'currency' => 'MWK'],
        ['code' => 'MV', 'en' => 'Maldives', 'is_activate' => 0, 'currency' => 'MVR'],
        ['code' => 'ML', 'en' => 'Mali', 'is_activate' => 0, 'currency' => 'XOF'],
        ['code' => 'MT', 'en' => 'Malta', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'MP', 'en' => 'Northern Mariana Islands', 'is_activate' => 0, 'currency' => 'USD'],
        ['code' => 'MA', 'en' => 'Morocco', 'is_activate' => 0, 'currency' => 'MAD'],
        ['code' => 'MQ', 'en' => 'Martinique', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'MU', 'en' => 'Mauritius', 'is_activate' => 0, 'currency' => 'MUR'],
        ['code' => 'MR', 'en' => 'Mauritania', 'is_activate' => 0, 'currency' => 'MRO'],
        ['code' => 'YT', 'en' => 'Mayotte', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'MX', 'en' => 'Mexico', 'is_activate' => 0, 'currency' => 'MXN'],
        ['code' => 'FM', 'en' => 'Micronesia, Federated States of', 'is_activate' => 0, 'currency' => 'USD'],
        ['code' => 'MD', 'en' => 'Moldova, Republic of', 'is_activate' => 0, 'currency' => 'MDL'],
        ['code' => 'MC', 'en' => 'Monaco', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'MN', 'en' => 'Mongolia', 'is_activate' => 0, 'currency' => 'MNT'],
        ['code' => 'MS', 'en' => 'Montserrat', 'is_activate' => 0, 'currency' => 'XCD'],
        ['code' => 'MZ', 'en' => 'Mozambique', 'is_activate' => 0, 'currency' => 'MZM'],
        ['code' => 'NP', 'en' => 'Nepal', 'is_activate' => 0, 'currency' => 'NPR'],
        ['code' => 'NA', 'en' => 'Namibia', 'is_activate' => 0, 'currency' => 'NAD'],
        ['code' => 'NR', 'en' => 'Nauru', 'is_activate' => 0, 'currency' => 'AUD'],
        ['code' => 'NI', 'en' => 'Nicaragua', 'is_activate' => 0, 'currency' => 'NIO'],
        ['code' => 'NE', 'en' => 'Niger', 'is_activate' => 0, 'currency' => 'XOF'],
        ['code' => 'NG', 'en' => 'Nigeria', 'is_activate' => 0, 'currency' => 'NGN'],
        ['code' => 'NU', 'en' => 'Niue', 'is_activate' => 0, 'currency' => 'NZD'],
        ['code' => 'NO', 'en' => 'Norway', 'is_activate' => 0, 'currency' => 'NOK'],
        ['code' => 'NC', 'en' => 'New Caledonia', 'is_activate' => 0, 'currency' => 'XPF'],
        ['code' => 'NZ', 'en' => 'New Zealand', 'is_activate' => 0, 'currency' => 'NZD'],
        ['code' => 'OM', 'en' => 'Oman', 'is_activate' => 0, 'currency' => 'OMR'],
        ['code' => 'UG', 'en' => 'Uganda', 'is_activate' => 0, 'currency' => 'UGX'],
        ['code' => 'UZ', 'en' => 'Uzbekistan', 'is_activate' => 0, 'currency' => 'UZS'],
        ['code' => 'PE', 'en' => 'Peru', 'is_activate' => 0, 'currency' => 'PEN'],
        ['code' => 'PK', 'en' => 'Pakistan', 'is_activate' => 0, 'currency' => 'PKR'],
        ['code' => 'PA', 'en' => 'Panama', 'is_activate' => 0, 'currency' => 'PAB'],
        ['code' => 'PG', 'en' => 'Papua New Guinea', 'is_activate' => 0, 'currency' => 'PGK'],
        ['code' => 'PY', 'en' => 'Paraguay', 'is_activate' => 0, 'currency' => 'PYG'],
        ['code' => 'NL', 'en' => 'Netherlands', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'PH', 'en' => 'Philippines', 'is_activate' => 0, 'currency' => 'PHP'],
        ['code' => 'PL', 'en' => 'Poland', 'is_activate' => 0, 'currency' => 'PLN'],
        ['code' => 'PF', 'en' => 'French Polynesia', 'is_activate' => 0, 'currency' => 'XPF'],
        ['code' => 'PR', 'en' => 'Puerto Rico', 'is_activate' => 0, 'currency' => 'USD'],
        ['code' => 'PT', 'en' => 'Portugal', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'QA', 'en' => 'Qatar', 'is_activate' => 0, 'currency' => 'QAR'],
        ['code' => 'CF', 'en' => 'Central African Republic', 'is_activate' => 0, 'currency' => 'XAF'],
        ['code' => 'CD', 'en' => 'Congo, Democratic Rep. of the', 'is_activate' => 0, 'currency' => 'CDF'],
        ['code' => 'DO', 'en' => 'Dominican Republic', 'is_activate' => 0, 'currency' => 'DOP'],
        ['code' => 'CZ', 'en' => 'Czech Republic', 'is_activate' => 0, 'currency' => 'CZK'],
        ['code' => 'RE', 'en' => 'Reunion', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'RO', 'en' => 'Romania', 'is_activate' => 0, 'currency' => 'ROL'],
        ['code' => 'GB', 'en' => 'Saint Pierre and Miquelon', 'is_activate' => 0, 'currency' => 'GBP'],
        ['code' => 'RU', 'en' => 'Russia (Russian Federation)', 'is_activate' => 0, 'currency' => 'RUB'],
        ['code' => 'RW', 'en' => 'Rwanda', 'is_activate' => 0, 'currency' => 'RWF'],
        ['code' => 'SN', 'en' => 'Senegal', 'is_activate' => 0, 'currency' => 'XOF'],
        ['code' => 'EH', 'en' => 'Western Sahara', 'is_activate' => 0, 'currency' => 'MRO'],
        ['code' => 'KN', 'en' => 'Saint Kitts and Nevis', 'is_activate' => 0, 'currency' => 'XCD'],
        ['code' => 'SM', 'en' => 'San Marino', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'PM', 'en' => 'Saint Pierre and Miquelon', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'VA', 'en' => 'Vatican City State (Holy See)', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'VC', 'en' => 'Saint Vincent and the Grenadines', 'is_activate' => 0, 'currency' => 'XCD'],
        ['code' => 'SH', 'en' => 'Saint Helena', 'is_activate' => 0, 'currency' => 'SHP'],
        ['code' => 'LC', 'en' => 'Saint Lucia', 'is_activate' => 0, 'currency' => 'XCD'],
        ['code' => 'SV', 'en' => 'El Salvador', 'is_activate' => 0, 'currency' => 'USD'],
        ['code' => 'WS', 'en' => 'Samoa', 'is_activate' => 0, 'currency' => 'WST'],
        ['code' => 'AS', 'en' => 'American Samoa', 'is_activate' => 0, 'currency' => 'USD'],
        ['code' => 'ST', 'en' => 'Sao Tome and Principe', 'is_activate' => 0, 'currency' => 'STD'],
        ['code' => 'SC', 'en' => 'Seychelles', 'is_activate' => 0, 'currency' => 'SCR'],
        ['code' => 'SL', 'en' => 'Sierra Leone', 'is_activate' => 0, 'currency' => 'SLL'],
        ['code' => 'SG', 'en' => 'Singapore', 'is_activate' => 0, 'currency' => 'SGD'],
        ['code' => 'SI', 'en' => 'Slovenia', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'SK', 'en' => 'Slovakia', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'SO', 'en' => 'Somalia', 'is_activate' => 0, 'currency' => 'SOS'],
        ['code' => 'SD', 'en' => 'Sudan', 'is_activate' => 0, 'currency' => 'SDP'],
        ['code' => 'LK', 'en' => 'Sri Lanka (ex-Ceilan)', 'is_activate' => 0, 'currency' => 'LKR'],
        ['code' => 'SE', 'en' => 'Sweden', 'is_activate' => 0, 'currency' => 'SEK'],
        ['code' => 'CH', 'en' => 'Switzerland', 'is_activate' => 0, 'currency' => 'CHF'],
        ['code' => 'SR', 'en' => 'Suriname', 'is_activate' => 0, 'currency' => 'SRG'],
        ['code' => 'SZ', 'en' => 'Swaziland', 'is_activate' => 0, 'currency' => 'SZL'],
        ['code' => 'SY', 'en' => 'Syrian Arab Republic', 'is_activate' => 0, 'currency' => 'SYP'],
        ['code' => 'TW', 'en' => 'Taiwan', 'is_activate' => 0, 'currency' => 'NTD'],
        ['code' => 'TJ', 'en' => 'Tajikistan', 'is_activate' => 0, 'currency' => 'TJS'],
        ['code' => 'TZ', 'en' => 'Tanzania, United Republic of', 'is_activate' => 0, 'currency' => 'TZS'],
        ['code' => 'TD', 'en' => 'Chad', 'is_activate' => 0, 'currency' => 'XAF'],
        ['code' => 'TF', 'en' => 'French Southern Territories - TF', 'is_activate' => 0, 'currency' => 'EUR'],
        ['code' => 'IO', 'en' => 'British Indian Ocean Territory', 'is_activate' => 0, 'currency' => 'GBP'],
        ['code' => 'TH', 'en' => 'Thailand', 'is_activate' => 0, 'currency' => 'THB'],
        ['code' => 'TL', 'en' => 'Timor-Leste (East Timor)', 'is_activate' => 0, 'currency' => 'USD'],
        ['code' => 'TG', 'en' => 'Togo', 'is_activate' => 0, 'currency' => 'XOF'],
        ['code' => 'TK', 'en' => 'Tokelau', 'is_activate' => 0, 'currency' => 'NZD'],
        ['code' => 'TO', 'en' => 'Tonga', 'is_activate' => 0, 'currency' => 'TOP'],
        ['code' => 'TT', 'en' => 'Trinidad & Tobago', 'is_activate' => 0, 'currency' => 'TTD'],
        ['code' => 'TN', 'en' => 'Tunisia', 'is_activate' => 0, 'currency' => 'TND'],
        ['code' => 'TM', 'en' => 'Turkmenistan', 'is_activate' => 0, 'currency' => 'TMM'],
        ['code' => 'TR', 'en' => 'Turkey', 'is_activate' => 0, 'currency' => 'TRL'],
        ['code' => 'TV', 'en' => 'Tuvalu', 'is_activate' => 0, 'currency' => 'TVD'],
        ['code' => 'UA', 'en' => 'Ukraine', 'is_activate' => 0, 'currency' => 'UAH'],
        ['code' => 'UY', 'en' => 'Uruguay', 'is_activate' => 0, 'currency' => 'UYP'],
        ['code' => 'VU', 'en' => 'Vanuatu', 'is_activate' => 0, 'currency' => 'VUV'],
        ['code' => 'VE', 'en' => 'Venezuela', 'is_activate' => 0, 'currency' => 'VEB'],
        ['code' => 'VN', 'en' => 'Viet Nam', 'is_activate' => 0, 'currency' => 'VND'],
        ['code' => 'WF', 'en' => 'Wallis and Futuna', 'is_activate' => 0, 'currency' => 'XPF'],
        ['code' => 'YE', 'en' => 'Yemen', 'is_activate' => 0, 'currency' => 'YER'],
        ['code' => 'YU', 'en' => 'Saint Pierre and Miquelon', 'is_activate' => 0, 'currency' => 'YUN'],
        ['code' => 'ZM', 'en' => 'Zambia', 'is_activate' => 0, 'currency' => 'ZMK'],
        ['code' => 'ZW', 'en' => 'Zimbabwe', 'is_activate' => 0, 'currency' => 'ZWD'],
        ['code' => 'MK', 'en' => 'Macedonia, TFYR', 'is_activate' => 0, 'currency' => 'MKD'],
      ];
    }
}
