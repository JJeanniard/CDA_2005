using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace test_web_static.Controllers
{
    public class HomeController : Controller
    {
        public String Index()
        {
            return "Test hello";
        }
    }
}
