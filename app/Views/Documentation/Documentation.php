<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Sidebar Menu -->
    <side-Bar></side-Bar>
    <!-- Sidebar Menu -->

    <!-- Layout container -->
    <div class="layout-page" style="content-visibility: auto!important;">
      <!-- Top BarNavbar -->
      <top-Bar></top-Bar>
      <!-- / Navbar -->

      <!-- Content wrapper -->
      <div class="container content-wrapper">
        <!--  -->
        <div class="flex-grow-1">
          <h4 class="py-3 mb-4"><span class="text-muted fw-light">StoreIgniter /</span> Support & Enquiry</h4>
        </div>

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
          <!-- Styling  -->
          <style>
            body {
              font-family: Arial, sans-serif;
              margin: 0;
              padding: 0;
              line-height: 1.6;
              color: #333;
            }

            html {
              scroll-behavior: smooth;
            }

            h1 {
              border-bottom: 2px solid #0056b3;
              padding-bottom: 10px;
            }

            ul {
              margin: 10px 0;
              padding-left: 20px;
            }

            code {
              background-color: #f4f4f4;
              padding: 2px 5px;
              border-radius: 4px;
              color: #d6336c;
            }

            pre {
              background-color: #f9f9f9;
              padding: 10px;
              border-radius: 5px;
              overflow-x: auto;
            }

            a {
              color: #0056b3;
              text-decoration: none;
            }

            a:hover {
              text-decoration: underline;
            }
          </style>
          <!-- End Styling -->
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!--  -->
            <div class="flex-grow-1">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">StoreIgniter /</span> Project Documentation</h4>
            </div>
            <!--  -->
            <!-- Content -->
            <div class="container">
              <h1>StoreIgniter Documentation</h1>
              <p><strong>StoreIgniter</strong> is a comprehensive e-commerce platform built with <strong>CodeIgniter</strong> and <strong>AngularJS</strong>. It provides an intuitive, robust solution for creating and managing online stores, offering powerful tools to handle product management, payment processing, and more.</p>

              <h2>Table of Contents</h2>
              <ul>
                <li><a href="#!/documentation/#introduction">Introduction</a></li>
                <li><a href="#!/documentation/#features">Features</a></li>
                <li><a href="#!/documentation/#system-requirements">System Requirements</a></li>
                <li><a href="#!/documentation/#configuration">Configuration</a></li>
                <li><a href="#!/documentation/#usage">Usage</a></li>
                <li><a href="#!/documentation/#deployment">Deployment</a></li>
                <li><a href="#!/documentation/#security">Security</a></li>
                <li><a href="#!/documentation/#best-practices">Best Practices</a></li>
                <li><a href="#!/documentation/#troubleshooting">Troubleshooting</a></li>
                <li><a href="#!/documentation/#faq">FAQ</a></li>
                <li><a href="#!/documentation/#support">Support</a></li>
                <li><a href="#!/documentation/#license">License</a></li>
              </ul>

              <h2 id="introduction">1. Introduction</h2>
              <p>StoreIgniter is designed to help businesses create a seamless online shopping experience. With its powerful backend, built on <strong>CodeIgniter</strong>, and a dynamic front end using <strong>AngularJS</strong>, StoreIgniter supports a smooth, scalable, and secure e-commerce environment.</p>

              <h2 id="features">2. Features</h2>
              <ul>
                <li><strong>Admin Dashboard</strong>: An intuitive, organized interface to manage products, orders, and customer interactions.</li>
                <li><strong>Product Management</strong>: Enables adding, editing, and categorizing products, managing inventory, and updating descriptions and images.</li>
                <li><strong>Order Management</strong>: Track orders, handle payments, manage shipping, and generate invoices.</li>
                <li><strong>Customer Management</strong>: Store customer data, track order history, and provide personalized support.</li>
                <li><strong>Payment Gateways Integration</strong>: Supports secure transactions with gateways like PayPal, Stripe, and Authorize.net.</li>
                <li><strong>Responsive Design</strong>: Optimized for any device, ensuring a consistent user experience.</li>
                <li><strong>Search Engine Optimization (SEO)</strong>: Customizable meta tags and URLs for improved visibility.</li>
                <li><strong>Multi-language Support</strong>: Easily translate your store for a global audience.</li>
                <li><strong>Analytics and Reporting</strong>: Gain insights on store performance, sales trends, and customer behavior.</li>
              </ul>

              <h2 id="system-requirements">3. System Requirements</h2>
              <p>To ensure smooth operation, StoreIgniter requires:</p>
              <ul>
                <li><strong>PHP</strong>: Version 7.2 or higher</li>
                <li><strong>Database</strong>: MySQL or a compatible database system</li>
                <li><strong>Composer</strong>: For managing PHP dependencies</li>
                <li><strong>Node.js</strong> and <strong>npm</strong>: For managing JavaScript dependencies</li>
              </ul>

              <h2 id="configuration">4. Configuration</h2>
              <ul>
                <li><strong>Database Configuration</strong>: Ensure your database settings are accurate for your server environment.</li>
                <li><strong>Mail Configuration</strong>: Set up SMTP settings for order and customer notifications.</li>
                <li><strong>Payment Gateway Configuration</strong>: Add API keys for payment gateways such as PayPal, Stripe, or Authorize.net.</li>
                <li><strong>SEO Settings</strong>: Optimize SEO settings in the admin dashboard for search engine visibility.</li>
              </ul>

              <h2 id="usage">5. Usage</h2>
              <ul>
                <li><strong>Admin Dashboard Access</strong>: Log in to manage all store operations.</li>
                <li><strong>Product and Order Management</strong>: Use the dashboard to manage products, orders, and inventory.</li>
                <li><strong>Customer Support</strong>: View customer profiles and order history for effective support.</li>
              </ul>

              <h2 id="deployment">6. Deployment</h2>
              <ul>
                <li><strong>Server Configuration</strong>: Ensure your production server has PHP, MySQL, and Composer configured.</li>
                <li><strong>Optimize for Production</strong>: Run caching commands for better performance:
                  <pre>
                    <code>php artisan config:cache php artisan route:cache</code>
                  </pre>
                </li>
                <li><strong>Enable Security Features</strong>: Use HTTPS, configure firewalls, and monitor access logs regularly.</li>
              </ul>

              <h2 id="security">7. Security</h2>
              <ul>
                <li><strong>Encryption</strong>: Ensure sensitive information, like payment data, is encrypted.</li>
                <li><strong>Data Backups</strong>: Regularly back up your database and application files.</li>
                <li><strong>Access Control</strong>: Restrict admin dashboard access to authorized users.</li>
                <li><strong>Dependency Updates</strong>: Regularly update dependencies to maintain security.</li>
              </ul>

              <h2 id="best-practices">8. Best Practices</h2>
              <ul>
                <li><strong>Maintain Code Standards</strong>: Adhere to MVC principles for organized code.</li>
                <li><strong>Optimize Media</strong>: Compress images and other assets for faster loading.</li>
                <li><strong>Performance Monitoring</strong>: Use analytics to monitor load times, conversions, and user behavior.</li>
                <li><strong>Regular SEO Updates</strong>: Use SEO tools and keep product content relevant.</li>
              </ul>

              <h2 id="troubleshooting">9. Troubleshooting</h2>
              <ul>
                <li><strong>Database Connectivity</strong>: Verify database credentials if facing connection issues.</li>
                <li><strong>Permission Errors</strong>: Ensure correct permissions for storage and cache directories.</li>
                <li><strong>Payment Gateway Issues</strong>: Confirm API keys and settings in the configuration.</li>
              </ul>

              <h2 id="faq">10. FAQ</h2>
              <ul>
                <li><strong>Can StoreIgniter handle a large product catalog?</strong> Yes, StoreIgniter is optimized for scalability.</li>
                <li><strong>Is it possible to integrate additional payment gateways?</strong> Yes, refer to the Payment Gateway Integration documentation.</li>
              </ul>

              <h2 id="support">11. Support</h2>
              <p>For assistance, contact the StoreIgniter support team at <a href="mailto:support@storeigniter.com">support@storeigniter.com</a> or visit
                <a href="https://www.storeigniter.com/docs">www.storeigniter.com/docs</a>.
              </p>

              <h2 id="license">12. License</h2>
              <p>StoreIgniter is open-source software licensed under the <a href="https://github.com/CoderAnnu/StoreIgniter">MIT License</a>.
                Please review the license for usage and redistribution details.</p>

              <h3>Additional Notes for Production</h3>
              <ul>
                <li><strong>Server Monitoring</strong>: Use a monitoring tool to track server performance.</li>
                <li><strong>Enable Caching</strong>: Improves performance by reducing load times.</li>
                <li><strong>SEO Maintenance</strong>: Regularly update SEO settings to maintain store visibility.</li>
              </ul>
            </div>

            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                  <div class="text-body mb-2 mb-md-0"> ©Storigniter , made with <span class="text-danger"><i class="tf-icons mdi mdi-heart"></i></span> by
                    <a href="https://github.com/CoderAnnu/StoreIgniter" target="_blank" class="footer-link fw-medium">CoderAnnu</a>
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <a href="#!/documentation" class="footer-link me-3">Documentation</a>
                    <a href="#!/support" class="footer-link">Support</a>
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <!-- <div class="content-backdrop fade"></div> -->
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
      <!-- Overlay -->
      <!-- <div class="layout-overlay layout-menu-toggle"></div> -->
    </div>
    <!-- / Layout wrapper -->
    <!-- End code  -->