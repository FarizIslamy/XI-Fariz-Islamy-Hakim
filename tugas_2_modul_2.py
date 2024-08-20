class Kalkulator:
  def _init_(self, angka1, angka2):
      self.angka1 = angka1
      self.angka2 = angka2

  def tambah(self):
      return self.angka1 + self.angka2

  def kurang(self):
      return self.angka1 - self.angka2

  def kali(self):
      return self.angka1 * self.angka2

  def bagi(self):
      if self.angka2 != 0:
          return self.angka1 / self.angka2
      else:
          return "Error: Pembagian dengan nol tidak diperbolehkan"

# Contoh penggunaan
angka1 = float(input("Masukkan angka pertama: "))
angka2 = float(input("Masukkan angka kedua: "))

kalkulator = Kalkulator(angka1, angka2)

print("Hasil Penjumlahan: ", kalkulator.tambah())
print("Hasil Pengurangan: ", kalkulator.kurang())
print("Hasil Perkalian: ", kalkulator.kali())
print("Hasil Pembagian: ", kalkulator.bagi())