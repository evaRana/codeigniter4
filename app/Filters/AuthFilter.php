<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Admin\AdminModel;
class AuthFilter implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return RequestInterface|ResponseInterface|string|void
     */
    public function before(RequestInterface $request, $arguments = null)
    {
         $session = session();

        // ✅ Check if logged in
        if (!$session->get('is_admin_logged_in')) {
            return redirect()->to('/admin/login');
        }

        // ✅ Role check
        $role = $session->get('role');
        $adminId = $session->get('admin_id');

        if ($role === 'A') {
            return; // Normal admin
        }

        // if ($role === 'SA') {
        //     // Super Admin: validate access
        //     $adminModel = new AdminModel();
        //     $userAccess = $adminModel->get_single_record('tbl_admin', ['user_id' => $adminId], 'access');

        //     $access = json_decode($userAccess['access'] ?? '[]', true);

        //     $router    = service('router');
        //     $controller = $router->controllerName();
        //     $method     = $router->methodName();

        //     $controllerName = class_basename($controller); // Extract class name only
        //     $currentRoute   = $controllerName . '/' . $method;

        //     if ($adminId !== 'admin') {
        //         if ($method === 'index' && $controllerName === 'Dashboard') {
        //             return;
        //         } elseif (in_array($currentRoute, $access)) {
        //             return;
        //         } elseif ($controllerName === 'Sublogin') {
        //             return;
        //         } else {
        //             return redirect()->to('/admin/permissions/accessDeined');
        //         }
        //     }
        // }

        return; // Default allow
    

        // Check for admin authentication
        // if ($arguments && in_array('admin', $arguments)) {
        //     if (!$session->get('is_admin_logged_in')) {
        //         return redirect()->to('/admin/login'); // redirect to admin login
        //     }
        // }

        // Check for user authentication
        // if ($arguments && in_array('user', $arguments)) {
        //     if (!$session->get('is_user_logged_in')) {
        //         return redirect()->to('/login'); // redirect to user login
        //     }
        // }
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return ResponseInterface|void
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
