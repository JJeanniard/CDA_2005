using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.EntityFrameworkCore;
using Tp_Freelance.Models;

namespace Tp_Freelance.Controllers
{
    public class CustomersCatsController : Controller
    {
        private readonly FreelanceContext _context;

        public CustomersCatsController(FreelanceContext context)
        {
            _context = context;
        }

        // GET: CustomersCats
        public async Task<IActionResult> Index()
        {
            return View(await _context.CustomersCats.ToListAsync());
        }

        // GET: CustomersCats/Details/5
        public async Task<IActionResult> Details(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var customersCat = await _context.CustomersCats
                .FirstOrDefaultAsync(m => m.CatId == id);
            if (customersCat == null)
            {
                return NotFound();
            }

            return View(customersCat);
        }

        // GET: CustomersCats/Create
        public IActionResult Create()
        {
            return View();
        }

        // POST: CustomersCats/Create
        // To protect from overposting attacks, enable the specific properties you want to bind to.
        // For more details, see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Create([Bind("CatId,CatName,CatDescription")] CustomersCat customersCat)
        {
            if (ModelState.IsValid)
            {
                _context.Add(customersCat);
                await _context.SaveChangesAsync();
                return RedirectToAction(nameof(Index));
            }
            return View(customersCat);
        }

        // GET: CustomersCats/Edit/5
        public async Task<IActionResult> Edit(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var customersCat = await _context.CustomersCats.FindAsync(id);
            if (customersCat == null)
            {
                return NotFound();
            }
            return View(customersCat);
        }

        // POST: CustomersCats/Edit/5
        // To protect from overposting attacks, enable the specific properties you want to bind to.
        // For more details, see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Edit(int id, [Bind("CatId,CatName,CatDescription")] CustomersCat customersCat)
        {
            if (id != customersCat.CatId)
            {
                return NotFound();
            }

            if (ModelState.IsValid)
            {
                try
                {
                    _context.Update(customersCat);
                    await _context.SaveChangesAsync();
                }
                catch (DbUpdateConcurrencyException)
                {
                    if (!CustomersCatExists(customersCat.CatId))
                    {
                        return NotFound();
                    }
                    else
                    {
                        throw;
                    }
                }
                return RedirectToAction(nameof(Index));
            }
            return View(customersCat);
        }

        // GET: CustomersCats/Delete/5
        public async Task<IActionResult> Delete(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var customersCat = await _context.CustomersCats
                .FirstOrDefaultAsync(m => m.CatId == id);
            if (customersCat == null)
            {
                return NotFound();
            }

            return View(customersCat);
        }

        // POST: CustomersCats/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> DeleteConfirmed(int id)
        {
            var customersCat = await _context.CustomersCats.FindAsync(id);
            _context.CustomersCats.Remove(customersCat);
            await _context.SaveChangesAsync();
            return RedirectToAction(nameof(Index));
        }

        private bool CustomersCatExists(int id)
        {
            return _context.CustomersCats.Any(e => e.CatId == id);
        }
    }
}
