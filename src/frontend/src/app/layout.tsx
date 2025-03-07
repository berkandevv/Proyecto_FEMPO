import Header from "../components/Header";
import Hero from "../components/Hero";
import Footer from "../components/Footer";
import ApolloTest from "../components/ApolloTest";
import "./globals.css";

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body>
        <div className="flex flex-col min-h-screen">
          <Header />
          <ApolloTest></ApolloTest>
          <Hero></Hero>
          <main className="flex-grow">{children}</main>
          <Footer />
        </div>
      </body>
    </html>
  );
}
