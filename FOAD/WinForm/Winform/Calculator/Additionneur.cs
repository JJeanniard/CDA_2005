using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Calculator
{
    public partial class FormAdditionneur : Form
    {
        Int32 resultat = 0;

        public FormAdditionneur()
        {
            InitializeComponent();
        }

        private void Btn_Click(object sender, EventArgs e)
        {
            Button button = (Button)sender;
            resultat += Int32.Parse(button.Tag.ToString());
            TextReslt.Text += $"{button.Tag}+";
        }

        private void BtnReset_Click(object sender, EventArgs e)
        {
            TextReslt.Clear();
            resultat = 0;
        }

        private void BtnCalculate_Click(object sender, EventArgs e)
        {
            TextReslt.Text += $" = {resultat}+";
        }
    }
}
