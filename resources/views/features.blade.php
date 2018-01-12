@extends('partials.skeleton', ['pageTitle' => 'Monica features'])

@section('content')

<div class="bb b--gray-monica mb5 pt4">
  <div class="mw8 center ph3">
    <div class="flex justify-center">
      <div class="mt4 mr2">
        <a href="{{ secure_url('/features') }}" class="db link no-underline dark-gray f5 f4-ns lh-copy pt2 pb2 pl3 pr3 dib relative z-1 b--dark-green bb bw2">
          Contact management
        </a>
      </div>
      <div class="mt4 mr2">
        <a href="{{ secure_url('/features/dashboard') }}" class="db link no-underline dark-gray f5 f4-ns lh-copy pt2 pb2 pl3 pr3 dib relative z-1">
          Powerful dashboard
        </a>
      </div>
      <div class="mt4">
        <a href="{{ secure_url('/features/journal') }}" class="db link no-underline dark-gray f5 f4-ns lh-copy pt2 pb2 pl3 pr3 dib relative z-1">
          Journal
        </a>
      </div>
    </div>
  </div>
</div>

<div class="mw8 center ph3">
  <div class="cf">
    <div class="fl w-100 tc mb3">
      <h1 class="f2 normal lh-copy mt0">How people keep track of what's important.</h1>
      <h2 class="normal lh-copy measure center">Write down what you know about the people you care about. And never forget again a single thing about them.</h2>
    </div>
  </div>
</div>

<div class="mw8 center ph3 mb5 mt4 relative">
  <div class="flex justify-center mb3">
    <img src="{{ secure_asset('img/contacts.png') }}" width="601" height="1202">
    <div class="absolute" style="top: 61px; left: 70px; width: 110px;">
      <div class="relative">
        <p class="lh-copy" style="color: #d33828;">Have a quick glance of important information of your contact</p>

        <div class="absolute" style="right: -3px; top: 30px;">
          <svg width="42px" height="20px" viewBox="0 0 42 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="absolute">
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Artboard-2" transform="translate(-186.000000, -704.000000)" stroke="#E18075" fill="#E18075">
                <path d="M191.99285,696.969907 C191.882376,700.38029 192.080576,702.883697 192.587451,704.480127 C194.17072,709.466728 197.517176,713.70941 199.599201,715.985664 C201.80917,718.401797 206.664281,721.882992 211.857932,723.893098 C213.223934,724.421783 215.120703,724.760521 217.548239,724.909311 L216.289013,727.969907 L222.99041,725.338244 L220.579556,719.910224 L218.351451,722.745374 C216.918914,722.683136 215.775257,722.53471 214.92048,722.300095 C211.761306,721.432982 207.495617,719.13979 205.957062,717.635272 C204.471488,716.182564 199.726198,713.090852 195.543619,706.929043 C194.272135,705.055882 193.088545,701.73617 191.99285,696.969907 Z" id="Path-2" transform="translate(207.476803, 712.469907) rotate(-24.000000) translate(-207.476803, -712.469907) "></path>
              </g>
            </g>
          </svg>
        </div>
      </div>
    </div>
    <div class="absolute" style="top: 232px; left: 80px; width: 120px;">
      <div class="relative">
        <p class="lh-copy" style="color: #d33828;">Indicate the names of significant others, children and even pets.</p>

        <div class="absolute" style="right: -33px; top: -20px;">
          <svg width="35px" height="30px" viewBox="0 0 35 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Artboard-2" transform="translate(-190.000000, -867.000000)" stroke="#E18075" fill="#E18075">
                <path d="M191.99285,866.969907 C191.882376,870.38029 192.080576,872.883697 192.587451,874.480127 C194.17072,879.466728 197.517176,883.70941 199.599201,885.985664 C201.80917,888.401797 206.664281,891.882992 211.857932,893.893098 C213.223934,894.421783 215.120703,894.760521 217.548239,894.909311 L216.289013,897.969907 L222.99041,895.338244 L220.579556,889.910224 L218.351451,892.745374 C216.918914,892.683136 215.775257,892.53471 214.92048,892.300095 C211.761306,891.432982 207.495617,889.13979 205.957062,887.635272 C204.471488,886.182564 199.726198,883.090852 195.543619,876.929043 C194.272135,875.055882 193.088545,871.73617 191.99285,866.969907 Z" id="Path-2" transform="translate(207.476803, 882.469907) scale(1, -1) rotate(-5.000000) translate(-207.476803, -882.469907) "></path>
              </g>
            </g>
          </svg>
        </div>
      </div>
    </div>
    <div class="absolute" style="top: 472px; left: 80px; width: 120px;">
      <div class="relative">
        <p class="lh-copy" style="color: #d33828;">Add all the different ways of contacting this person: phone, email, Whatsapp nickname, and much more.</p>

        <div class="absolute" style="right: -33px; top: -20px;">
          <svg width="35px" height="30px" viewBox="0 0 35 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Artboard-2" transform="translate(-190.000000, -867.000000)" stroke="#E18075" fill="#E18075">
                <path d="M191.99285,866.969907 C191.882376,870.38029 192.080576,872.883697 192.587451,874.480127 C194.17072,879.466728 197.517176,883.70941 199.599201,885.985664 C201.80917,888.401797 206.664281,891.882992 211.857932,893.893098 C213.223934,894.421783 215.120703,894.760521 217.548239,894.909311 L216.289013,897.969907 L222.99041,895.338244 L220.579556,889.910224 L218.351451,892.745374 C216.918914,892.683136 215.775257,892.53471 214.92048,892.300095 C211.761306,891.432982 207.495617,889.13979 205.957062,887.635272 C204.471488,886.182564 199.726198,883.090852 195.543619,876.929043 C194.272135,875.055882 193.088545,871.73617 191.99285,866.969907 Z" id="Path-2" transform="translate(207.476803, 882.469907) scale(1, -1) rotate(-5.000000) translate(-207.476803, -882.469907) "></path>
              </g>
            </g>
          </svg>
        </div>
      </div>
    </div>
    <div class="absolute" style="top: 180px; right: 70px; width: 130px;">
      <div class="relative">
        <p class="lh-copy" style="color: #d33828;">Add notes, private to you, about this person.</p>

        <div class="absolute" style="right: 137px; top: 50px;">
          <svg width="42px" height="20px" viewBox="0 0 42 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Artboard-2" transform="translate(-804.000000, -758.000000)" stroke="#E18075" fill="#E18075">
                <path d="M808.99285,750.969907 C808.882376,754.38029 809.080576,756.883697 809.587451,758.480127 C811.17072,763.466728 814.517176,767.70941 816.599201,769.985664 C818.80917,772.401797 823.664281,775.882992 828.857932,777.893098 C830.223934,778.421783 832.120703,778.760521 834.548239,778.909311 L833.289013,781.969907 L839.99041,779.338244 L837.579556,773.910224 L835.351451,776.745374 C833.918914,776.683136 832.775257,776.53471 831.92048,776.300095 C828.761306,775.432982 824.495617,773.13979 822.957062,771.635272 C821.471488,770.182564 816.726198,767.090852 812.543619,760.929043 C811.272135,759.055882 810.088545,755.73617 808.99285,750.969907 Z" id="Path-2" transform="translate(824.476803, 766.469907) scale(-1, 1) rotate(-24.000000) translate(-824.476803, -766.469907) "></path>
              </g>
            </g>
          </svg>
        </div>
      </div>
    </div>
    <div class="absolute" style="top: 430px; right: 20px; width: 160px;">
      <div class="relative">
        <p class="lh-copy" style="color: #d33828;">Indicate each time you call people you don't hear about often, so you can be reminded to call them in the future.</p>

        <div class="absolute" style="right: 177px; top: -20px;">
          <svg width="52px" height="31px" viewBox="0 0 52 31" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Artboard-2" transform="translate(-785.000000, -883.000000)" stroke="#E18075" fill="#E18075">
                <path d="M790.238529,879.301648 C790.092712,883.805533 790.354321,887.11163 791.023358,889.219938 C793.113155,895.805438 797.530227,901.408491 800.278345,904.414601 C803.195339,907.60544 809.603723,912.202843 816.458954,914.857468 C818.261975,915.55567 820.765569,916.003021 823.969735,916.199519 L822.307651,920.241462 L831.152995,916.765984 L827.970848,909.597529 L825.029914,913.341739 C823.139074,913.259545 821.629532,913.063527 820.501289,912.753685 C816.331416,911.608542 810.701024,908.580063 808.670247,906.593138 C806.7094,904.674635 800.445971,900.591599 794.92528,892.454072 C793.247015,889.980302 791.684765,885.596161 790.238529,879.301648 Z" id="Path-2" transform="translate(810.676191, 899.771555) scale(-1, -1) rotate(-17.000000) translate(-810.676191, -899.771555) "></path>
              </g>
            </g>
          </svg>
        </div>
      </div>
    </div>
    <div class="absolute" style="top: 670px; right: 20px; width: 160px;">
      <div class="relative">
        <p class="lh-copy" style="color: #d33828;">Add reminders about important dates or events. Some reminders are automatically filled for you (birthdays, for instance).</p>

        <div class="absolute" style="right: 177px; top: -20px;">
          <svg width="52px" height="31px" viewBox="0 0 52 31" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Artboard-2" transform="translate(-785.000000, -883.000000)" stroke="#E18075" fill="#E18075">
                <path d="M790.238529,879.301648 C790.092712,883.805533 790.354321,887.11163 791.023358,889.219938 C793.113155,895.805438 797.530227,901.408491 800.278345,904.414601 C803.195339,907.60544 809.603723,912.202843 816.458954,914.857468 C818.261975,915.55567 820.765569,916.003021 823.969735,916.199519 L822.307651,920.241462 L831.152995,916.765984 L827.970848,909.597529 L825.029914,913.341739 C823.139074,913.259545 821.629532,913.063527 820.501289,912.753685 C816.331416,911.608542 810.701024,908.580063 808.670247,906.593138 C806.7094,904.674635 800.445971,900.591599 794.92528,892.454072 C793.247015,889.980302 791.684765,885.596161 790.238529,879.301648 Z" id="Path-2" transform="translate(810.676191, 899.771555) scale(-1, -1) rotate(-17.000000) translate(-810.676191, -899.771555) "></path>
              </g>
            </g>
          </svg>
        </div>
      </div>
    </div>
    <div class="absolute" style="top: 910px; right: 20px; width: 160px;">
      <div class="relative">
        <p class="lh-copy" style="color: #d33828;">Manage gifts offered or that you want to offer. Indicate if you owe or if you are owed money.</p>

        <div class="absolute" style="right: 177px; top: -20px;">
          <svg width="52px" height="31px" viewBox="0 0 52 31" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Artboard-2" transform="translate(-785.000000, -883.000000)" stroke="#E18075" fill="#E18075">
                <path d="M790.238529,879.301648 C790.092712,883.805533 790.354321,887.11163 791.023358,889.219938 C793.113155,895.805438 797.530227,901.408491 800.278345,904.414601 C803.195339,907.60544 809.603723,912.202843 816.458954,914.857468 C818.261975,915.55567 820.765569,916.003021 823.969735,916.199519 L822.307651,920.241462 L831.152995,916.765984 L827.970848,909.597529 L825.029914,913.341739 C823.139074,913.259545 821.629532,913.063527 820.501289,912.753685 C816.331416,911.608542 810.701024,908.580063 808.670247,906.593138 C806.7094,904.674635 800.445971,900.591599 794.92528,892.454072 C793.247015,889.980302 791.684765,885.596161 790.238529,879.301648 Z" id="Path-2" transform="translate(810.676191, 899.771555) scale(-1, -1) rotate(-17.000000) translate(-810.676191, -899.771555) "></path>
              </g>
            </g>
          </svg>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mw8 center mb5 mt4 bt b--gray-monica">
  <div class="cf mb3">
    <div class="fl w-third pr2">
      <p class="lh-copy">
        <strong>All in one place:</strong> Manage, organize and track all the interactions with your contacts in a central place.
      </p>
    </div>
    <div class="fl w-third pr2">
      <p class="lh-copy">
        <strong>Web based:</strong> easily access Monica - either hosted on your or our servers.
      </p>
    </div>
    <div class="fl w-third">
      <p class="lh-copy">
        <strong>Modern interface:</strong> Monica is beautiful and very simple to use.
      </p>
    </div>
  </div>
</div>

<div class="bt b--gray-monica" style="background-color: #f6f6fa">
  <div class="mw8 center mb5 mt4 relative">
    <div class="cf mb3">
      <div class="fl w-50 pr2">
        <h2 class="mt5 normal">Loved by users. Adored by developers.</h2>
        <p class="lh-copy">
          Our users are happy with how fast and simple the product is. Developers love the API that allow them to automate Monica as they see fit.
        </p>
        <p class="lh-copy">Easily import or export your contacts and their data with Monica's powerful REST API, or use the API to automate many areas of the application.</p>
      </div>
      <div class="fl w-50">
        <img src="{{ secure_url('img/api.png') }}" width="512" height="401">
      </div>
    </div>
  </div>
</div>

@endsection
