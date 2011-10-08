<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-06 10:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 10:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-06 10:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 10:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-06 10:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-06 10:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 10:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-06 10:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 10:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-06 10:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-06 10:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-06 10:34:42 --- ERROR: View_Exception [ 0 ]: The requested view index/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-06 10:34:42 --- STRACE: View_Exception [ 0 ]: The requested view index/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(137): Kohana_View->set_filename('index/index')
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(30): Kohana_View->__construct('index/index', NULL)
#2 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(7): Kohana_View::factory('index/index')
#3 [internal function]: Controller_Index->action_index()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-06 10:34:42 --- ERROR: View_Exception [ 0 ]: The requested view index/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-06 10:34:42 --- STRACE: View_Exception [ 0 ]: The requested view index/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(137): Kohana_View->set_filename('index/index')
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(30): Kohana_View->__construct('index/index', NULL)
#2 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(7): Kohana_View::factory('index/index')
#3 [internal function]: Controller_Index->action_index()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-06 10:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-06 10:35:06 --- ERROR: View_Exception [ 0 ]: The requested view index/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-06 10:35:06 --- STRACE: View_Exception [ 0 ]: The requested view index/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(137): Kohana_View->set_filename('index/index')
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(30): Kohana_View->__construct('index/index', NULL)
#2 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(7): Kohana_View::factory('index/index')
#3 [internal function]: Controller_Index->action_index()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-06 10:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-06 10:35:06 --- ERROR: View_Exception [ 0 ]: The requested view index/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-06 10:35:06 --- STRACE: View_Exception [ 0 ]: The requested view index/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(137): Kohana_View->set_filename('index/index')
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(30): Kohana_View->__construct('index/index', NULL)
#2 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(7): Kohana_View::factory('index/index')
#3 [internal function]: Controller_Index->action_index()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-06 10:35:17 --- ERROR: View_Exception [ 0 ]: The requested view index/index.phtml could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-06 10:35:17 --- STRACE: View_Exception [ 0 ]: The requested view index/index.phtml could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(137): Kohana_View->set_filename('index/index.pht...')
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(30): Kohana_View->__construct('index/index.pht...', NULL)
#2 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(7): Kohana_View::factory('index/index.pht...')
#3 [internal function]: Controller_Index->action_index()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-06 10:35:17 --- ERROR: View_Exception [ 0 ]: The requested view index/index.phtml could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-06 10:35:17 --- STRACE: View_Exception [ 0 ]: The requested view index/index.phtml could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(137): Kohana_View->set_filename('index/index.pht...')
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(30): Kohana_View->__construct('index/index.pht...', NULL)
#2 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(7): Kohana_View::factory('index/index.pht...')
#3 [internal function]: Controller_Index->action_index()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-06 10:35:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:35:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-06 10:35:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:35:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-06 10:38:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:38:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:38:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:38:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:51:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:51:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:55:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:55:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:56:35 --- ERROR: ErrorException [ 8 ]: Undefined index: version ~ APPPATH/views/index/index.php [ 19 ]
2011-10-06 10:56:35 --- STRACE: ErrorException [ 8 ]: Undefined index: version ~ APPPATH/views/index/index.php [ 19 ]
--
#0 /mnt/hgfs/projects/snapshot/application/views/index/index.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/proje...', 19, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(15): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Index->action_index()
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#8 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-06 10:56:35 --- ERROR: ErrorException [ 8 ]: Undefined index: version ~ APPPATH/views/index/index.php [ 19 ]
2011-10-06 10:56:35 --- STRACE: ErrorException [ 8 ]: Undefined index: version ~ APPPATH/views/index/index.php [ 19 ]
--
#0 /mnt/hgfs/projects/snapshot/application/views/index/index.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/proje...', 19, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(15): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Index->action_index()
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#8 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-06 10:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:57:27 --- ERROR: ErrorException [ 8 ]: Undefined index: version ~ APPPATH/views/index/index.php [ 19 ]
2011-10-06 10:57:27 --- STRACE: ErrorException [ 8 ]: Undefined index: version ~ APPPATH/views/index/index.php [ 19 ]
--
#0 /mnt/hgfs/projects/snapshot/application/views/index/index.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/proje...', 19, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(16): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Index->action_index()
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#8 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-06 10:57:27 --- ERROR: ErrorException [ 8 ]: Undefined index: version ~ APPPATH/views/index/index.php [ 19 ]
2011-10-06 10:57:27 --- STRACE: ErrorException [ 8 ]: Undefined index: version ~ APPPATH/views/index/index.php [ 19 ]
--
#0 /mnt/hgfs/projects/snapshot/application/views/index/index.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/proje...', 19, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(16): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Index->action_index()
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#8 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-06 10:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 10:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 10:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:01:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:01:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:12:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:12:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:13:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:13:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local--files/admin:css/logo.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local--files/admin:css/logo.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:13:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/logo.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:13:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/logo.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:13:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:13:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:13:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/logo.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:13:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/logo.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:13:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:13:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:13:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:13:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:14:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:14:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:15:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:15:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:17:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:17:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:17:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:17:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:17:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:17:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:17:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:17:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:18:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:18:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:21:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:21:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:22:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:22:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:23:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:23:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:37:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 6 ]
2011-10-06 11:37:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 11:37:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 6 ]
2011-10-06 11:37:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 11:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:37:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 6 ]
2011-10-06 11:37:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 11:37:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 6 ]
2011-10-06 11:37:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 11:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:37:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 6 ]
2011-10-06 11:37:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 11:37:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 6 ]
2011-10-06 11:37:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 11:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:38:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 9 ]
2011-10-06 11:38:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 11:38:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 9 ]
2011-10-06 11:38:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 11:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:38:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 9 ]
2011-10-06 11:38:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 11:38:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 9 ]
2011-10-06 11:38:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/index/index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 11:38:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:38:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:38:36 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'base' ~ APPPATH/views/index/index.php [ 6 ]
2011-10-06 11:38:36 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'base' ~ APPPATH/views/index/index.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 11:38:36 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'base' ~ APPPATH/views/index/index.php [ 6 ]
2011-10-06 11:38:36 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'base' ~ APPPATH/views/index/index.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 11:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:41:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:41:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:45:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:45:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:48:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:48:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:51:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:51:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:51:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:51:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:52:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:52:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 11:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 11:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:01:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/index.php [ 9 ]
2011-10-06 12:01:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 12:01:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/index.php [ 9 ]
2011-10-06 12:01:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 12:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:02:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Config::get() ~ APPPATH/classes/controller/index.php [ 9 ]
2011-10-06 12:02:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Config::get() ~ APPPATH/classes/controller/index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 12:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:02:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Config::get() ~ APPPATH/classes/controller/index.php [ 9 ]
2011-10-06 12:02:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Config::get() ~ APPPATH/classes/controller/index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 12:03:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/index.php [ 9 ]
2011-10-06 12:03:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 12:03:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/index.php [ 9 ]
2011-10-06 12:03:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 12:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:03:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/index.php [ 9 ]
2011-10-06 12:03:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 12:03:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/index.php [ 9 ]
2011-10-06 12:03:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 12:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:07:42 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
2011-10-06 12:07:42 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/arr.php(411): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/mnt/hgfs/proje...', 411, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php(49): Kohana_Arr::merge(Array, 1)
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('snapshot')
#3 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(9): Kohana_Config->load('snapshot')
#4 [internal function]: Controller_Index->action_index()
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-06 12:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:07:42 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
2011-10-06 12:07:42 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/arr.php(411): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/mnt/hgfs/proje...', 411, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php(49): Kohana_Arr::merge(Array, 1)
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('snapshot')
#3 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(9): Kohana_Config->load('snapshot')
#4 [internal function]: Controller_Index->action_index()
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-06 12:08:59 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
2011-10-06 12:08:59 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/arr.php(411): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/mnt/hgfs/proje...', 411, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php(49): Kohana_Arr::merge(Array, 1)
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('snapshot')
#3 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(9): Kohana_Config->load('snapshot')
#4 [internal function]: Controller_Index->action_index()
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-06 12:08:59 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
2011-10-06 12:08:59 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/arr.php(411): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/mnt/hgfs/proje...', 411, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php(49): Kohana_Arr::merge(Array, 1)
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('snapshot')
#3 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(9): Kohana_Config->load('snapshot')
#4 [internal function]: Controller_Index->action_index()
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-06 12:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:16:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/index.php [ 11 ]
2011-10-06 12:16:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/index.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 12:16:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/index.php [ 11 ]
2011-10-06 12:16:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/index.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 12:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:17:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:17:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:17:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:17:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:17:51 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
2011-10-06 12:17:51 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/arr.php(411): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/mnt/hgfs/proje...', 411, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php(49): Kohana_Arr::merge(Array, 1)
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('snapshot')
#3 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(9): Kohana_Config->load('snapshot')
#4 [internal function]: Controller_Index->action_index()
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-06 12:17:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:17:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:17:55 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
2011-10-06 12:17:55 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/arr.php(411): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/mnt/hgfs/proje...', 411, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php(49): Kohana_Arr::merge(Array, 1)
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('snapshot')
#3 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(9): Kohana_Config->load('snapshot')
#4 [internal function]: Controller_Index->action_index()
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-06 12:17:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:17:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:17:55 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
2011-10-06 12:17:55 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 411 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/arr.php(411): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/mnt/hgfs/proje...', 411, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/config/file/reader.php(49): Kohana_Arr::merge(Array, 1)
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('snapshot')
#3 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(9): Kohana_Config->load('snapshot')
#4 [internal function]: Controller_Index->action_index()
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-06 12:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:23:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:23:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 12:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 12:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:11:35 --- ERROR: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
2011-10-06 13:11:35 --- STRACE: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:11:35 --- ERROR: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
2011-10-06 13:11:35 --- STRACE: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:11:55 --- ERROR: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
2011-10-06 13:11:55 --- STRACE: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:11:56 --- ERROR: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
2011-10-06 13:11:56 --- STRACE: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:13:24 --- ERROR: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
2011-10-06 13:13:24 --- STRACE: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:13:24 --- ERROR: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
2011-10-06 13:13:24 --- STRACE: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:13:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:13:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:15:53 --- ERROR: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
2011-10-06 13:15:53 --- STRACE: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:15:53 --- ERROR: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
2011-10-06 13:15:53 --- STRACE: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:15:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:15:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
2011-10-06 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:18:04 --- ERROR: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
2011-10-06 13:18:04 --- STRACE: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
2011-10-06 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
2011-10-06 13:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:18:09 --- ERROR: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
2011-10-06 13:18:09 --- STRACE: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:18:09 --- ERROR: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
2011-10-06 13:18:09 --- STRACE: ErrorException [ 1 ]: Class 'Snapshot_Model' not found ~ APPPATH/classes/controller/index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:21:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH/classes/model/snapshot.php [ 19 ]
2011-10-06 13:21:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH/classes/model/snapshot.php [ 19 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/proje...', 19, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Model_Snapshot->getVersions()
#2 [internal function]: Controller_Index->action_index()
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-06 13:21:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH/classes/model/snapshot.php [ 19 ]
2011-10-06 13:21:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH/classes/model/snapshot.php [ 19 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/proje...', 19, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Model_Snapshot->getVersions()
#2 [internal function]: Controller_Index->action_index()
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-06 13:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:24:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:24:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:26:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:26:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:27:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:27:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:28:02 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/index/index.php [ 29 ]
2011-10-06 13:28:02 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/index/index.php [ 29 ]
--
#0 /mnt/hgfs/projects/snapshot/application/views/index/index.php(29): Kohana_Core::error_handler(2, 'Invalid argumen...', '/mnt/hgfs/proje...', 29, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Index->action_index()
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#8 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-06 13:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:28:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:28:02 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/index/index.php [ 29 ]
2011-10-06 13:28:02 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/index/index.php [ 29 ]
--
#0 /mnt/hgfs/projects/snapshot/application/views/index/index.php(29): Kohana_Core::error_handler(2, 'Invalid argumen...', '/mnt/hgfs/proje...', 29, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Index->action_index()
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#8 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-06 13:29:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:29:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:30:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:30:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:31:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:31:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:34:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:34:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:38:13 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/snapshot.php [ 33 ]
2011-10-06 13:38:13 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/snapshot.php [ 33 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(33): Kohana_Core::error_handler(2, 'Invalid argumen...', '/mnt/hgfs/proje...', 33, Array)
#1 /mnt/hgfs/projects/snapshot/application/views/index/index.php(31): Model_Snapshot->has_builds('Windows 64 bit', '2.1-stable')
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#6 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Index->action_index()
#8 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#12 {main}
2011-10-06 13:38:13 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/snapshot.php [ 33 ]
2011-10-06 13:38:13 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/snapshot.php [ 33 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(33): Kohana_Core::error_handler(2, 'Invalid argumen...', '/mnt/hgfs/proje...', 33, Array)
#1 /mnt/hgfs/projects/snapshot/application/views/index/index.php(31): Model_Snapshot->has_builds('Windows 64 bit', '2.1-stable')
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#6 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Index->action_index()
#8 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#12 {main}
2011-10-06 13:38:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:38:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:45:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/index/index.php [ 30 ]
2011-10-06 13:45:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/index/index.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:45:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/index/index.php [ 30 ]
2011-10-06 13:45:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/index/index.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:46:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/index/index.php [ 30 ]
2011-10-06 13:46:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/index/index.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:46:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/index/index.php [ 30 ]
2011-10-06 13:46:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/index/index.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 13:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:47:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:47:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 13:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 13:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:03:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:03:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:04:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:04:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:10:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:10:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:12:41 --- ERROR: ErrorException [ 8 ]: Undefined index: url ~ APPPATH/views/index/index.php [ 33 ]
2011-10-06 14:12:41 --- STRACE: ErrorException [ 8 ]: Undefined index: url ~ APPPATH/views/index/index.php [ 33 ]
--
#0 /mnt/hgfs/projects/snapshot/application/views/index/index.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/proje...', 33, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Index->action_index()
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#8 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-06 14:12:41 --- ERROR: ErrorException [ 8 ]: Undefined index: url ~ APPPATH/views/index/index.php [ 33 ]
2011-10-06 14:12:41 --- STRACE: ErrorException [ 8 ]: Undefined index: url ~ APPPATH/views/index/index.php [ 33 ]
--
#0 /mnt/hgfs/projects/snapshot/application/views/index/index.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/proje...', 33, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Index->action_index()
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#8 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-06 14:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:13:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:13:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:14:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: ts ~ APPPATH/classes/model/snapshot.php [ 52 ]
2011-10-06 14:14:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: ts ~ APPPATH/classes/model/snapshot.php [ 52 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/proje...', 52, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(38): Model_Snapshot->format_timestamp('/mnt/hgfs/proje...')
#2 /mnt/hgfs/projects/snapshot/application/views/index/index.php(30): Model_Snapshot->get_latest_build('Windows 64 bit', '2.1-stable')
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#7 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Kohana_Response->body(Object(View))
#8 [internal function]: Controller_Index->action_index()
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#10 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#13 {main}
2011-10-06 14:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:14:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: ts ~ APPPATH/classes/model/snapshot.php [ 52 ]
2011-10-06 14:14:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: ts ~ APPPATH/classes/model/snapshot.php [ 52 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/proje...', 52, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(38): Model_Snapshot->format_timestamp('/mnt/hgfs/proje...')
#2 /mnt/hgfs/projects/snapshot/application/views/index/index.php(30): Model_Snapshot->get_latest_build('Windows 64 bit', '2.1-stable')
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#7 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Kohana_Response->body(Object(View))
#8 [internal function]: Controller_Index->action_index()
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#10 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#13 {main}
2011-10-06 14:14:53 --- ERROR: ErrorException [ 8 ]: Undefined index: url ~ APPPATH/views/index/index.php [ 33 ]
2011-10-06 14:14:53 --- STRACE: ErrorException [ 8 ]: Undefined index: url ~ APPPATH/views/index/index.php [ 33 ]
--
#0 /mnt/hgfs/projects/snapshot/application/views/index/index.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/proje...', 33, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Index->action_index()
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#8 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-06 14:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:14:53 --- ERROR: ErrorException [ 8 ]: Undefined index: url ~ APPPATH/views/index/index.php [ 33 ]
2011-10-06 14:14:53 --- STRACE: ErrorException [ 8 ]: Undefined index: url ~ APPPATH/views/index/index.php [ 33 ]
--
#0 /mnt/hgfs/projects/snapshot/application/views/index/index.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/proje...', 33, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Index->action_index()
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#8 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-06 14:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:18:52 --- ERROR: ErrorException [ 8 ]: Undefined index: url ~ APPPATH/views/index/index.php [ 33 ]
2011-10-06 14:18:52 --- STRACE: ErrorException [ 8 ]: Undefined index: url ~ APPPATH/views/index/index.php [ 33 ]
--
#0 /mnt/hgfs/projects/snapshot/application/views/index/index.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/proje...', 33, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Index->action_index()
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#8 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-06 14:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:18:52 --- ERROR: ErrorException [ 8 ]: Undefined index: url ~ APPPATH/views/index/index.php [ 33 ]
2011-10-06 14:18:52 --- STRACE: ErrorException [ 8 ]: Undefined index: url ~ APPPATH/views/index/index.php [ 33 ]
--
#0 /mnt/hgfs/projects/snapshot/application/views/index/index.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/mnt/hgfs/proje...', 33, Array)
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Index->action_index()
#7 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#8 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-06 14:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 14:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 14:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 14:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 14:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 14:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 14:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 14:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 14:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 14:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 14:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 14:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 14:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 14:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 14:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 14:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 14:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 14:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 14:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 14:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 14:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 14:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 14:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 14:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 14:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 14:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 14:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 15:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 15:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 15:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 15:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-06 15:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 15:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-06 15:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 15:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-06 15:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 15:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:06:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file/a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-06 15:06:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file/a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 15:06:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:06:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:06:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file/a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-06 15:06:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file/a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 15:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:07:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:07:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:07:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-06 15:07:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 15:07:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-06 15:07:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 15:07:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:07:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-06 15:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 15:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-06 15:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 15:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:13:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Download::$input ~ APPPATH/classes/controller/download.php [ 7 ]
2011-10-06 15:13:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Download::$input ~ APPPATH/classes/controller/download.php [ 7 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/controller/download.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/mnt/hgfs/proje...', 7, Array)
#1 [internal function]: Controller_Download->action_file()
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-06 15:13:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Download::$input ~ APPPATH/classes/controller/download.php [ 7 ]
2011-10-06 15:13:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Download::$input ~ APPPATH/classes/controller/download.php [ 7 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/controller/download.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/mnt/hgfs/proje...', 7, Array)
#1 [internal function]: Controller_Download->action_file()
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-06 15:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:14:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/controller/download.php [ 7 ]
2011-10-06 15:14:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/controller/download.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 15:14:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/controller/download.php [ 7 ]
2011-10-06 15:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the 
2011-10-06 15:14:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/controller/download.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}_Request->execute()
#1 {main}
2011-10-06 15:16:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/controller/download.php [ 7 ]
2011-10-06 15:16:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/controller/download.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 15:16:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/controller/download.php [ 7 ]
2011-10-06 15:16:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/controller/download.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 15:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:16:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/classes/controller/download.php [ 7 ]
2011-10-06 15:16:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/classes/controller/download.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 15:16:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/classes/controller/download.php [ 7 ]
2011-10-06 15:16:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/classes/controller/download.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 15:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:16:29 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$request ~ APPPATH/classes/controller/download.php [ 7 ]
2011-10-06 15:16:29 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$request ~ APPPATH/classes/controller/download.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 15:16:29 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$request ~ APPPATH/classes/controller/download.php [ 7 ]
2011-10-06 15:16:29 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$request ~ APPPATH/classes/controller/download.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 15:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:19:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:19:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:19:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:19:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/os/Windows 64 bit/version/2.1-stable/build/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/os/Windows 64 bit/version/2.1-stable/build/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/os/Windows 64 bit/version/2.1-stable/build/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/os/Windows 64 bit/version/2.1-stable/build/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/os/Windows 64 bit/version/2.1-stable/build/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/os/Windows 64 bit/version/2.1-stable/build/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/os/Windows 64 bit/version/2.1-stable/build/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/os/Windows 64 bit/version/2.1-stable/build/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/Windows 64 bit/2.1-stable/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/Windows 64 bit/2.1-stable/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/Windows 64 bit/2.1-stable/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/Windows 64 bit/2.1-stable/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/111/2.1-stable/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/111/2.1-stable/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/111/2.1-stable/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/111/2.1-stable/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/111/2222/333.as ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/111/2222/333.as ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/111/2222/333.as ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/111/2222/333.as ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/111/2.1-stable/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/111/2.1-stable/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/Windows 64 bit/2.1-stable/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/Windows 64 bit/2.1-stable/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/os/Windows 64 bit/version/2.1-stable/build/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/os/Windows 64 bit/version/2.1-stable/build/2011-09-09_12-02-44 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:25:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:25:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:25:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:25:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:38:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:38:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:44:14 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Model_Snapshot::__construct() must be an instance of Config_Group, none given, called in /mnt/hgfs/projects/snapshot/application/classes/controller/download.php on line 20 and defined ~ APPPATH/classes/model/snapshot.php [ 7 ]
2011-10-06 15:44:14 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Model_Snapshot::__construct() must be an instance of Config_Group, none given, called in /mnt/hgfs/projects/snapshot/application/classes/controller/download.php on line 20 and defined ~ APPPATH/classes/model/snapshot.php [ 7 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(7): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/mnt/hgfs/proje...', 7, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/controller/download.php(20): Model_Snapshot->__construct()
#2 [internal function]: Controller_Download->action_file()
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-06 15:44:15 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Model_Snapshot::__construct() must be an instance of Config_Group, none given, called in /mnt/hgfs/projects/snapshot/application/classes/controller/download.php on line 20 and defined ~ APPPATH/classes/model/snapshot.php [ 7 ]
2011-10-06 15:44:15 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Model_Snapshot::__construct() must be an instance of Config_Group, none given, called in /mnt/hgfs/projects/snapshot/application/classes/controller/download.php on line 20 and defined ~ APPPATH/classes/model/snapshot.php [ 7 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(7): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/mnt/hgfs/proje...', 7, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/controller/download.php(20): Model_Snapshot->__construct()
#2 [internal function]: Controller_Download->action_file()
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-06 15:44:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:44:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:44:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: build_id ~ APPPATH/classes/controller/download.php [ 22 ]
2011-10-06 15:44:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: build_id ~ APPPATH/classes/controller/download.php [ 22 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/controller/download.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/proje...', 22, Array)
#1 [internal function]: Controller_Download->action_file()
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-06 15:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:44:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: build_id ~ APPPATH/classes/controller/download.php [ 22 ]
2011-10-06 15:44:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: build_id ~ APPPATH/classes/controller/download.php [ 22 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/controller/download.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/proje...', 22, Array)
#1 [internal function]: Controller_Download->action_file()
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-06 15:44:48 --- ERROR: ErrorException [ 1 ]: Class 'ZipArchive' not found ~ APPPATH/classes/model/snapshot.php [ 69 ]
2011-10-06 15:44:48 --- STRACE: ErrorException [ 1 ]: Class 'ZipArchive' not found ~ APPPATH/classes/model/snapshot.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 15:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:44:48 --- ERROR: ErrorException [ 1 ]: Class 'ZipArchive' not found ~ APPPATH/classes/model/snapshot.php [ 69 ]
2011-10-06 15:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:44:48 --- STRACE: ErrorException [ 1 ]: Class 'ZipArchive' not found ~ APPPATH/classes/model/snapshot.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 15:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:47:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:47:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:53:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:53:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:54:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:54:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 15:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 15:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:12:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:12:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:13:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:13:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:15:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:15:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:15:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:15:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:15:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:15:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:16:17 --- ERROR: ErrorException [ 2 ]: finfo_file() [function.finfo-file]: Empty filename or path ~ APPPATH/classes/controller/download.php [ 23 ]
2011-10-06 16:16:17 --- STRACE: ErrorException [ 2 ]: finfo_file() [function.finfo-file]: Empty filename or path ~ APPPATH/classes/controller/download.php [ 23 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo_file() [<...', '/mnt/hgfs/proje...', 23, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/controller/download.php(23): finfo_file(Resource id #52, '')
#2 [internal function]: Controller_Download->action_file()
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-06 16:16:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:16:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:16:18 --- ERROR: ErrorException [ 2 ]: finfo_file() [function.finfo-file]: Empty filename or path ~ APPPATH/classes/controller/download.php [ 23 ]
2011-10-06 16:16:18 --- STRACE: ErrorException [ 2 ]: finfo_file() [function.finfo-file]: Empty filename or path ~ APPPATH/classes/controller/download.php [ 23 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo_file() [<...', '/mnt/hgfs/proje...', 23, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/controller/download.php(23): finfo_file(Resource id #54, '')
#2 [internal function]: Controller_Download->action_file()
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-06 16:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:17:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:17:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:29:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:29:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:35:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:35:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:36:26 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/snapshot.php [ 56 ]
2011-10-06 16:36:26 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/snapshot.php [ 56 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(56): Kohana_Core::error_handler(2, 'Invalid argumen...', '/mnt/hgfs/proje...', 56, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(37): Model_Snapshot->clean_old_builds(Array)
#2 /mnt/hgfs/projects/snapshot/application/views/index/index.php(30): Model_Snapshot->get_latest_build('win64', '2.1-stable')
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#7 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Kohana_Response->body(Object(View))
#8 [internal function]: Controller_Index->action_index()
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#10 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#13 {main}
2011-10-06 16:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:36:26 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/snapshot.php [ 56 ]
2011-10-06 16:36:26 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/snapshot.php [ 56 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(56): Kohana_Core::error_handler(2, 'Invalid argumen...', '/mnt/hgfs/proje...', 56, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(37): Model_Snapshot->clean_old_builds(Array)
#2 /mnt/hgfs/projects/snapshot/application/views/index/index.php(30): Model_Snapshot->get_latest_build('win64', '2.1-stable')
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(61): include('/mnt/hgfs/proje...')
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/proje...', Array)
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /mnt/hgfs/projects/snapshot/system/classes/kohana/response.php(160): Kohana_View->__toString()
#7 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(13): Kohana_Response->body(Object(View))
#8 [internal function]: Controller_Index->action_index()
#9 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#10 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#13 {main}
2011-10-06 16:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 16:47:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 16:47:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:04:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/model/snapshot.php [ 46 ]
2011-10-06 17:04:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/model/snapshot.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 17:04:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/model/snapshot.php [ 46 ]
2011-10-06 17:04:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/model/snapshot.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-06 17:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:08:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH/classes/model/snapshot.php [ 66 ]
2011-10-06 17:08:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH/classes/model/snapshot.php [ 66 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/proje...', 66, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(11): Model_Snapshot->clean_old_builds()
#2 [internal function]: Controller_Index->action_index()
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-06 17:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:08:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH/classes/model/snapshot.php [ 66 ]
2011-10-06 17:08:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH/classes/model/snapshot.php [ 66 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/proje...', 66, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/controller/index.php(11): Model_Snapshot->clean_old_builds()
#2 [internal function]: Controller_Index->action_index()
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-06 17:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:08:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:08:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:13:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:13:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:16:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: build_id ~ APPPATH/classes/model/snapshot.php [ 99 ]
2011-10-06 17:16:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: build_id ~ APPPATH/classes/model/snapshot.php [ 99 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/proje...', 99, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/controller/download.php(20): Model_Snapshot->get_build_file('win64', '2.1-stable', NULL)
#2 [internal function]: Controller_Download->action_file()
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-06 17:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:16:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: build_id ~ APPPATH/classes/model/snapshot.php [ 99 ]
2011-10-06 17:16:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: build_id ~ APPPATH/classes/model/snapshot.php [ 99 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/proje...', 99, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/controller/download.php(20): Model_Snapshot->get_build_file('win64', '2.1-stable', NULL)
#2 [internal function]: Controller_Download->action_file()
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-06 17:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:17:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:17:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:17:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: build_id ~ APPPATH/classes/model/snapshot.php [ 98 ]
2011-10-06 17:17:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: build_id ~ APPPATH/classes/model/snapshot.php [ 98 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(98): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/proje...', 98, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/controller/download.php(20): Model_Snapshot->get_build_file('win64', '2.1-stable', NULL)
#2 [internal function]: Controller_Download->action_file()
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-06 17:17:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:17:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:17:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: build_id ~ APPPATH/classes/model/snapshot.php [ 98 ]
2011-10-06 17:17:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: build_id ~ APPPATH/classes/model/snapshot.php [ 98 ]
--
#0 /mnt/hgfs/projects/snapshot/application/classes/model/snapshot.php(98): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/proje...', 98, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/controller/download.php(20): Model_Snapshot->get_build_file('win64', '2.1-stable', NULL)
#2 [internal function]: Controller_Download->action_file()
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-06 17:17:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:17:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:17:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:17:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:19:12 --- ERROR: ErrorException [ 2 ]: finfo_file() [function.finfo-file]: Empty filename or path ~ APPPATH/classes/controller/download.php [ 23 ]
2011-10-06 17:19:12 --- STRACE: ErrorException [ 2 ]: finfo_file() [function.finfo-file]: Empty filename or path ~ APPPATH/classes/controller/download.php [ 23 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo_file() [<...', '/mnt/hgfs/proje...', 23, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/controller/download.php(23): finfo_file(Resource id #52, '')
#2 [internal function]: Controller_Download->action_file()
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-06 17:19:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:19:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:19:12 --- ERROR: ErrorException [ 2 ]: finfo_file() [function.finfo-file]: Empty filename or path ~ APPPATH/classes/controller/download.php [ 23 ]
2011-10-06 17:19:12 --- STRACE: ErrorException [ 2 ]: finfo_file() [function.finfo-file]: Empty filename or path ~ APPPATH/classes/controller/download.php [ 23 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'finfo_file() [<...', '/mnt/hgfs/proje...', 23, Array)
#1 /mnt/hgfs/projects/snapshot/application/classes/controller/download.php(23): finfo_file(Resource id #54, '')
#2 [internal function]: Controller_Download->action_file()
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#4 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-06 17:19:40 --- ERROR: ErrorException [ 0 ]: Failed to get the download file ~ APPPATH/classes/controller/download.php [ 23 ]
2011-10-06 17:19:40 --- STRACE: ErrorException [ 0 ]: Failed to get the download file ~ APPPATH/classes/controller/download.php [ 23 ]
--
#0 [internal function]: Controller_Download->action_file()
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#5 {main}
2011-10-06 17:19:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:19:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:19:41 --- ERROR: ErrorException [ 0 ]: Failed to get the download file ~ APPPATH/classes/controller/download.php [ 23 ]
2011-10-06 17:19:41 --- STRACE: ErrorException [ 0 ]: Failed to get the download file ~ APPPATH/classes/controller/download.php [ 23 ]
--
#0 [internal function]: Controller_Download->action_file()
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#5 {main}
2011-10-06 17:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:20:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:20:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:20:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:20:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:21:52 --- ERROR: ErrorException [ 0 ]: Failed to get the download file ~ APPPATH/classes/controller/download.php [ 15 ]
2011-10-06 17:21:52 --- STRACE: ErrorException [ 0 ]: Failed to get the download file ~ APPPATH/classes/controller/download.php [ 15 ]
--
#0 [internal function]: Controller_Download->action_file()
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#5 {main}
2011-10-06 17:21:52 --- ERROR: ErrorException [ 0 ]: Failed to get the download file ~ APPPATH/classes/controller/download.php [ 15 ]
2011-10-06 17:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:21:52 --- STRACE: ErrorException [ 0 ]: Failed to get the download file ~ APPPATH/classes/controller/download.php [ 15 ]
--
#0 [internal function]: Controller_Download->action_file()
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Download))
#2 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#5 {main}
2011-10-06 17:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:22:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:22:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file/win64/2.1-stable was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 17:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file/win64/2.1-stable was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 17:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file/win64/2.1-stable was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 17:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file/win64/2.1-stable was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 17:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file/win64/2.1-stable was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 17:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file/win64/2.1-stable was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 17:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file/win64/2.1-stable was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 17:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file/win64/2.1-stable was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 17:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file/win64/2.1-stable was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 17:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file/win64/2.1-stable was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 17:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL download/file/win64/2.1-stable was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-06 17:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL download/file/win64/2.1-stable was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/projects/snapshot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/projects/snapshot/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-06 17:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:32:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:32:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:34:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:34:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/win64/2.1-stable ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/win64/2.1-stable ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/win64/2.1-stable ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/win64/2.1-stable ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/win64/2.1-stable ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/win64/2.1-stable ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/win64/2.1-stable ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/win64/2.1-stable ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/win64/2.1-stable ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/win64/2.1-stable ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/win64/2.1-stable ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file/win64/2.1-stable ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/win32/2.1-stable/mnt/hgfs/projects/snapshot/static/packages/test2/2009-04-07_22-43-22/xtest.asdas ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/win32/2.1-stable/mnt/hgfs/projects/snapshot/static/packages/test2/2009-04-07_22-43-22/xtest.asdas ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/win32/2.1-stable/mnt/hgfs/projects/snapshot/static/packages/test2/2009-04-07_22-43-22/xtest.asdas ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/win32/2.1-stable/mnt/hgfs/projects/snapshot/static/packages/test2/2009-04-07_22-43-22/xtest.asdas ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-06 17:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-06 17:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /mnt/hgfs/projects/snapshot/index.php(111): Kohana_Request->execute()
#1 {main}