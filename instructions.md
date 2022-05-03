Instructions:

The Challenge

Part I: Use WordPress as a Headless CMS.

You will be using WordPress mainly as a back-end resource to store all your data, you’ll take full advantage of creating Custom Post types to organize your data types and Advanced Custom Fields to enrich the data that will be later consumed through the WordPress API by your front-end.

Requirements:

Setting up a local development environment for your WordPress installation.
Create the following custom post type: Podcast.
Refer to the UI design to judge the Advanced Custom Fields that you will use inside this custom post type.
Cerate Blog posts.
Create a “gallery” Advanced Custom Field for pages.
Use Contact Form 7 to submit forms.
Create an Advanced custom field to customize the Hero section.
The source code must be a GitHub repository publicly available containing the WordPress files + database.
The repository should include a README file with all documentation necessary to run the project locally.


Extra Points (Nice to have but not required):

Write your Custom post types manually, not using a plugin.
Write your ACF Fields manually, not using the UI creator.
Have an organized folder structure for your custom post types PHP files.
Deploy your WordPress on any cloud provider or hosting platform.
Make the assets the smallest possible size - ensure that images are properly optimized, resources minified,


Part II: Take the provided UI Design and build it using a Single Page Application library.

Your task is to build a Single Page Application (SPA) using the SPA library of your preference (React, Vue, Angular, Solid, Etc.) based on the given UI design.



Requirements:

Use ES6.
Use Linter tools to keep your code consistent (ESLint, TSLint, Prettier, etc)
Ensure that the page works and displays correctly in the following browsers:
Firefox (latest version)
Google Chrome (latest version)
Microsoft Edge (latest version)
Safari (latest version)
Main font: Poppins. https://fonts.google.com/specimen/Poppins
Image resources: Feel free to use any image you want, the images on the UI are for reference, since we are using WordPress as the Back-End we can change them anyways.
Primary colors:
Red: #F13C45
Dark-blue: #0B2342
Content: Placeholder content should suffice, you can use: https://lorem2.com/ or any other placeholder content generator of your preference.
Flawless Mobile responsiveness is expected.
Feel free to use your own styles or any 3rd party library such as Material Design, Bootstrap, etc.
The source code must be a GitHub repository publicly available containing frontend code only.
The repository should include a README file with all documentation necessary to run the project locally.


Extra Points (Nice to have but not required):

Use CSS pre-post processors.
Implement CSS3 keyframes to animate content with some simple animations.
Advanced bundler use (Webpack, rollup, vite, etc.).
Clean, organized component hierarchy and code.
Create internal components to display the Episodes & blogs (We leave this up to your time & creativity)
Use of Vue.


Part III: consume the WordPress API using the SPA you created.
Your task will be to fetch data from your WordPress backend to hydrate the UI design you created on Step 2 and will allow the visitors to see the CMS content you created.



Requirements:

Use a state management library (Vuex, Redux, Redux toolkit, NgRx, etc.) to create a query system to the WordPress API.
Make your State manager Code as reusable as possible.
Feel free to use the API flavor you feel most confortable with (WordPress REST API, Wordpress WPGraphQL API.)
Use ES6.
Use Linter tools to keep your code consistent (ESLint, TSLint, Prettier, etc)
The source code must be part of the Step II repository.


Optional (Nice to have but not required):

Unit tests.
Deploy your SPA on any cloud provider or hosting platform.


Here you have some hints and useful links to help you in your journey:
For the WordPress backend:
Advanced custom fields plugin: https://wordpress.org/plugins/advanced-custom-fields/
Contact Form 7 Plugin: https://wordpress.org/plugins/contact-form-7/
Post type creation reference: https://developer.wordpress.org/reference/functions/register_post_type/
WordPress API reference: https://developer.wordpress.org/rest-api/reference/
WPGraphQL API Reference: https://www.wpgraphql.com/
Quickly spinning up a WordPress dev server: https://localwp.com/
For the provided UI:
It is not necessary to create the other internal pages, but home.
To open the provided sketch file use Lunacy: https://iconos8.es/lunacy
For the SPA:
All content must be dynamic (Example):
The menu must come from the menu end-point of the WordPress API.
The Home page content must come from a WordPress page set as home.
The advanced custom fields should carry all data necessary for the components to work properly.
The form at the bottom must have filed input verification (in this case, since it is an email input field, it must give you feedback if the email is incorrectly typed) You can do this through regular expressions or any other means.
Feel free to use external libraries to make your job easier as long as they have Good reputation and do not bloat your SPA.


Quality Assurance - Before submitting your work we advise you to review it based on the following conditions:
General
Are all requirements set above met?
Can the project be built using npm run build?
Is the page working without any JS errors?
 Precision
Is reasonable precision achieved?
 Browser check
Does the page display and work correctly in supported browsers?
Valid HTML
Is the page valid?
Coding Standards
Is the page using a consistent HTML coding style?
Is the page using a consistent CSS coding style?
Is the page using a consistent JS coding style?
Accessibility
Are proper ALT attributes for images provided?
Are ARIA attributes properly used?
Is proper heading structure in place?


Submission

Upload your assessment to a public GitHub repository and send us the link to gustavo.gomez@struck.com and cc. recruitment@nicasource.com

Please make sure to complete the test by end of the day on Tuesday, May 3, 2022.

Remember to add everything we need to do to run the assessment in the README.md file. We’d like to see not only the final product but the path you take to build it, so make sure to have at least one commit per task. If you have any questions regarding the assignment feel free to contact us at the previous emails indicated.


Best of lucks,
NicaSource Hiring Team.