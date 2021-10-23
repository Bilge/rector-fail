Apparently Rector is supposed to hoist all dependencies fetched directly from the service container into the constructor for dependency injection, however it only seems to work on services that are fetched using their literal class names and not using the service definition names, whether or not they are specified in bundles or not and whether or not they are specified in YAML or XML format.

>vendor/bin/rector process --dry-run

```diff
 class DefaultController extends Controller
 {
+    public function __construct(private \Org\Service\MyRegularService $myRegularService)
+    {
+    }
     public function indexAction()
     {
         $regularService = $this->get('my.regular.service');
         $bundleService = $this->get('my.bundle.service');
-        $regularServiceAsClassName = $this->get(MyRegularService::class);
+        $regularServiceAsClassName = $this->myRegularService;

         return $this->render('FirstBundle:Default:index.html.twig');
     }

```
